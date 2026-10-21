<?php
class Produto {
    public string $nome;
    public float $preco;
    public int $quantidade;
    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
    public function exibirDados(): void {
        echo "==============================\n";
        echo "PRODUTO\n";
        echo "==============================\n";
        echo "Produto: " . $this->nome . "\n";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "\n";
        echo "Quantidade: " . $this->quantidade . "\n";
    }
    public function calcularValorEstoque(): float {
        return $this->preco * $this->quantidade;
    }
    public function adicionarEstoque(int $quantidade): void {
        $this->quantidade += $quantidade;
    }
    public function retirarEstoque(int $quantidade): void {
        if ($quantidade <= $this->quantidade) {
            $this->quantidade -= $quantidade;
        } else {
            echo "Quantidade insuficiente em estoque para " . $this->nome . ".\n";
        }
    }
}
$produto1 = new Produto("Teclado", 150.00, 4);
$produto2 = new Produto("Mouse", 80.00, 10);
$produto3 = new Produto("Monitor", 900.00, 3);
$produto1->exibirDados();
echo "Valor em estoque: R$ " . number_format($produto1->calcularValorEstoque(), 2, ',', '.') . "\n\n";
$produto2->exibirDados();
echo "Valor em estoque: R$ " . number_format($produto2->calcularValorEstoque(), 2, ',', '.') . "\n\n";
$produto3->exibirDados();
echo "Valor em estoque: R$ " . number_format($produto3->calcularValorEstoque(), 2, ',', '.') . "\n\n";
echo "==============================\n";
echo "TESTANDO DESAFIOS \n";
echo "==============================\n";
$produto1->adicionarEstoque(3);
echo "Nova quantidade de " . $produto1->nome . ": " . $produto1->quantidade . "\n";
$produto2->retirarEstoque(4);
echo "Nova quantidade de " . $produto2->nome . ": " . $produto2->quantidade . "\n";
$produto3->retirarEstoque(10);
?>