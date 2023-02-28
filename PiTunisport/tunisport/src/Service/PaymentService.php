namespace App\Service;

use Stripe\Stripe;
use App\Entity\Reservation;
use App\Entity\Billet;

class PaymentService
{
    private $stripe;

    public function __construct(string $stripeApiKey)
    {
        $this->stripe = new \Stripe\StripeClient($stripeApiKey);
    }

    public function createPaymentIntent(Reservation $reservation, Billet $ticket): \Stripe\PaymentIntent
    {
        return $this->stripe->paymentIntents->create([
            'amount' => $ticket->getPrix() * 100, // amount in cents
            'currency' => 'usd',
            'description' => 'Match Ticket',
            'metadata' => [
                'reservation_id' => $reservation->getId(),
                'ticket_id' => $ticket->getId(),
            ],
        ]);
    }
}

