/*
Arrays não podem ser passados diretamente para funções como arrays completos. Quando você tenta passar um array para uma função, ele "decai" (decays) em um ponteiro para o seu primeiro elemento.

Por exemplo:

int numbers[5] = {1, 2, 3, 4, 5};
void processArray(int arr[]) {
	int size = std::size(arr);
}
std::size(arr) não lhe dará o tamanho real do array. arr é na verdade um ponteiro aqui, não um array. Ponteiros serão aprendidos no próximo curso.

É por isso que, ao passar arrays para funções, geralmente precisamos passar o tamanho como um parâmetro separado:

void processArray(int arr[], int size) {
    // Agora podemos trabalhar com segurança com o array usando o parâmetro de tamanho
}
Veja como chamar a função:

int numbers[5] = {1, 2, 3, 4, 5};
processArray(numbers, 5);
Além disso, não é possível retornar um array em uma função:

int[] processArray(int arr[]) {
	return arr;
}
Isso é ilegal. Em vez disso, você deve usar a sintaxe *:

int* processArray(int arr[]) {
	return arr;
}
int* newArr = processArray(arr);
A sintaxe de estrela (*) refere-se a ponteiros que serão discutidos no próximo curso.



*/