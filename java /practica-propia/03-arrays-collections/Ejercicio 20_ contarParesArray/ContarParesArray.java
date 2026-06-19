public class ContarParesArray {
    public static void main(String[] args) {
        int[] numeros = {10, 21, 32, 43, 54};
        int contador = 0;
        for (int i = 0; i < numeros.length; i++) {
            if (numeros[i] % 2 == 0) {
                contador++;
            }
        }
        System.out.println("Cantidad de pares: " + contador);
    }
}
