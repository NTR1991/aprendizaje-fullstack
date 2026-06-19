import java.util.ArrayList;

public class ArrayListBasico {
    public static void main(String[] args) {
        ArrayList<String> nombres = new ArrayList<>();
        nombres.add("Ana");
        nombres.add("Luis");
        nombres.add("Elena");
        for (String n : nombres) {
            System.out.println(n);
        }
    }
}
