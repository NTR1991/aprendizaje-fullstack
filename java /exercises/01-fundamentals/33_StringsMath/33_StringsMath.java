public class StringsMath {
    public static void main(String[] args) {
        String saludo = "hola mundo";

        System.out.println("Caracteres: " + saludo.length());
        System.out.println("En mayusculas: " + saludo.toUpperCase());
        System.out.println("En miniscula: " + saludo.toLowerCase());      

        System.out.println("Máximo: " + Math.max(15, 20));
        System.out.println("Mínimo: " + Math.min(15, 20));
        System.out.println("Raíz cuadrada de 25: " + Math.sqrt(25));

    }
}
