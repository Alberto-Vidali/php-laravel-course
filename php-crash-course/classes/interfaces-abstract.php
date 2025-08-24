<?php

// La composizione è quando una classe ne contiene un altra per ottenere le funzionalità di cui ha bisogno,
// invece di ereditare da una classe base.

// Una classe può avere una sola classe figlia ma implementare quante interfacce vuole.
interface PaymentProcessor {
    public function processPayment(float | int $amount): bool;
    public function refundPayment(float | int $amount): bool;
}

// Le classi astratte se non implementassero i metodi dell'interfaccia possono ma in realtà li hanno
// comunque, e sono considerati astratti, e quindi li dovrebbero implementare le classi figlie.
abstract class OnlinePaymentProcessor implements PaymentProcessor {
    // protected significa che può essere acceduto nella classe base e nelle sottoclassi
    // readonly indica che la proprietà una volta inizializzata non può più essere modificata.
    public function __construct(protected readonly string $apiKey) {
        
    }

    // Un metodo astratto deve essere implementato dalle sottoclassi
    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float $amount): bool;
    abstract protected function executeRefund(float $amount): bool;

    public function processPayment(float | int $amount): bool {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executePayment($amount);
    }

    public function refundPayment(float | int $amount) : bool {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->refundPayment($amount);
    }
}

// Ereditano anche l'interfaccia PaymentProcessor
// Final significa che non si può più estendere ulteriormente
final class StripeProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strpos($this->apiKey, "sk_") === 0;
    }

    protected function executePayment(float $amount): bool {
        echo "Processing Stripe payment of $amount\n";
        return true;
    }

    protected function executeRefund(float $amount): bool {
        echo "Processing Stripe refund of $amount\n";
        return true;
    }
}

final class PayPalProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strpos($this->apiKey, "sk_") === 32;
    }

    protected function executePayment(float $amount): bool {
        echo "Processing PayPal payment of $amount\n";
        return true;
    }

    protected function executeRefund(float $amount): bool {
        echo "Processing PayPal refund of $amount\n";
        return true;
    }
}

class CashPaymentProcessor implements PaymentProcessor {
    public function processPayment(float | int $amount): bool {
        echo "Cash payment ...";
        return true;
    }
    public function refundPayment(float | int $amount): bool {
        echo "Cash refund ...";
        return true;
    }
}

$processor = new StripeProcessor("sk_");
$processor->processPayment(500);

class OrderProcessor {
    public function __construct(private PaymentProcessor $paymentProcessor) {
        
    }

    public function processOrder(float $amount): void {
        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully\n";
        } else {
            echo "Order process failed\n";
        }
    }

    public function refundOrder(float $amount): void {
        if ($this->paymentProcessor->refundPayment($amount)) {
            echo "Order refunded successfully\n";
        } else {
            echo "Order refund failed\n";
        }
    }
}