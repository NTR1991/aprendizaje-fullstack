import java.util.Scanner;

public class CalculadoraSimple {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Primer número: ");
        double a = sc.nextDouble();
        System.out.print("Operación (+, -, *, /): ");
        char op = sc.next().charAt(0);
        System.out.print("Segundo número: ");
        double b = sc.nextDouble();
        double resultado = 0;
        switch (op) {
            case '+':
                resultado = a + b;
                break;
            case '-':
                resultado = a - b;
                break;
            case '*':
                resultado = a * b;
                break;
            case '/':
                if (b != 0) {
                    resultado = a / b;
                } else {
                    System.out.println("Error: División entre cero");
                    sc.close();
                    return;
                }
                break;
            default:
                System.out.println("Operación no válida");
                sc.close();
                return;
        }
        System.out.println(a + " " + op + " " + b + " = " + resultado);
        sc.close();
    }
}
