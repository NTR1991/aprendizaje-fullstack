public class MaximoArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        int max = numeros[0];
        for (int i = 1; i < numeros.length; i++) {
            if (numeros[i] > max) {
                max = numeros[i];
            }
        }
        System.out.println("Máximo: " + max);
    }
}
