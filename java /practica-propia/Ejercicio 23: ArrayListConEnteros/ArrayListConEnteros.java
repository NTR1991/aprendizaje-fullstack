import java.util.ArrayList;

public class ArrayListConEnteros {
    public static void main(String[] args) {
        ArrayList<Integer> numeros = new ArrayList<>();
        numeros.add(10);
        numeros.add(20);
        numeros.add(30);
        numeros.remove(1);
        for (int n : numeros) {
            System.out.println(n);
        }
    }
}
