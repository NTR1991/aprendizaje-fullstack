import java.util.Scanner;

public class MultipleExceptions {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Introduce el primer numero: ");
        String entrada1 = scanner.nextLine();

        System.out.print("Introduce el segundo numero: ");
        String entrada2 = scanner.nextLine();

        try {
            int valor1 = Integer.parseInt(entrada1);
            int valor2 = Integer.parseInt(entrada2);

            int resultado = valor1 / valor2;
            System.out.println("El resultado es: " + resultado);

        } catch (NumberFormatException e) {
            System.out.println("Error: Introduce numeros validos");
        } catch (ArithmeticException e) {
            System.out.println("Error: No se puede dividir entre 0");
        } catch (Exception e) {
            System.out.println("Error: Datos invalidos");
        }

        scanner.close();
    }
}
