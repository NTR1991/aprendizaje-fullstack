import java.util.Scanner;

public class TryCatch {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Introduce el valor en euros: ");
        String entrada = scanner.nextLine();

        try {
            double euros = Double.parseDouble(entrada);
            double dolares = euros * 1.10;
            System.out.println("El valor en dolares es: " + dolares);
        } catch (NumberFormatException e) {
            System.out.println("Error: Introduce un numero valido");
            
        }

        scanner.close();
    }
}
