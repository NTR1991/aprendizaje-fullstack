import java.util.Scanner;

public class DivisionSegura {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Introduce el primer numero: ");
        String entrada1 = scanner.nextLine();

        System.out.print("Introduce el segundo numero: ");
        String entrada2 = scanner.nextLine();

        try {
            double conver1 = Double.parseDouble(entrada1);
            double conver2 = Double.parseDouble(entrada2);

            if (conver2 == 0) {
                System.out.println("Error: No se puede dividir entre 0");
            } else {
                double dividir = conver1 / conver2;
                System.out.println("El resultado es: " + dividir);
            }

        } catch (NumberFormatException e) {
            System.out.println("Error: Introduce numeros validos");
        }

        scanner.close();
    }
}
