// O que é Go?

// Go (ou Golang) é uma linguagem de programação criada pelo Google em 2009. Ela foi projetada para ser simples, eficiente e fácil de aprender.

// Olá, Mundo

//  "Hello, World!" é um programa simples que exibe Hello, World! na tela.

// Em Go, usamos Println() para mostrar palavras na tela. As palavras vão dentro de aspas.

// Vamos dar uma olhada no programa "Hello World!" em Go:

fmt.Println("Hello, World!")

package main
import ("fmt")

func main() {
	// TODO: Use fmt.Println() to print "Hello, World!" below
	fmt.Println("Hello, World!")
}

// Println
// Println é uma função do pacote fmt que imprime texto seguido de uma quebra de linha. Você pode imprimir vários itens com uma única chamada.

// Imprima uma mensagem simples:

fmt.Println("Learning Go is fun!")

// Quando você executar este código, verá:

Learning Go is fun!

// prima vários valores separados por vírgulas:
fmt.Println("Go", "is", "awesome")

// A saída mostra todos os itens com espaços entre eles:
Go is awesome


package main

import "fmt"

func main() {
	// TODO: Use fmt.Println() to print "Alex 25 coding" on a single line
	// Hint: You can provide multiple arguments to fmt.Println()
	fmt.Println("Alex", 25, "coding")
}

// Comentários em Go

/*Comentários em Go são notas que o compilador ignora. Eles ajudam a explicar seu código para outros desenvolvedores (e para você mesmo).

Primeiro, vamos ver comentários de uma linha em Go. Usamos duas barras*/ // para criar um comentário de uma linha:

// Este é um comentário de uma linha
fmt.Println("Hello, World!")

/*Após executar este código, "Hello, World!" será exibido na tela. O comentário é completamente ignorado pelo Go ao executar o programa.

Em seguida, vamos ver como escrever comentários de múltiplas linhas. Usamos /* para iniciar e */ /*para finalizar um comentário de múltiplas linhas:*/

/* Este é um 
   comentário de múltiplas linhas */
fmt.Println("Hello, World!")

/*Após executar este código, obtemos o mesmo resultado - "Hello, World!" será exibido na tela. O comentário de múltiplas linhas também é ignorado durante a execução.*/