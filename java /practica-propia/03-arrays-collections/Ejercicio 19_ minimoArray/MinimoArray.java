public class MinimoArray {
    public static void main(String[] args) {
        int[] numeros = {10, 20, 30, 40, 50};
        int min = numeros[0];
        for (int i = 1; i < numeros.length; i++) {
            if (numeros[i] < min) {
                min = numeros[i];
            }
        }
        System.out.println("Mínimo: " + min);
    }
}
