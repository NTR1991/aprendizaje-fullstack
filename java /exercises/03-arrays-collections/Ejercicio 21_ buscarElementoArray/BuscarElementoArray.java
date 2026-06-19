public class BuscarElementoArray {
    public static void main(String[] args) {
        int[] numeros = {5, 10, 15, 20, 25};
        int buscar = 15;
        boolean encontrado = false;
        for (int i = 0; i < numeros.length; i++) {
            if (numeros[i] == buscar) {
                encontrado = true;
                break;
            }
        }
        if (encontrado) {
            System.out.println("Encontrado");
        } else {
            System.out.println("No encontrado");
        }
    }
}
