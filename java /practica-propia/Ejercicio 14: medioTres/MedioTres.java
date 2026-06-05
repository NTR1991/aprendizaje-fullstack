public class MedioTres {
    public static int medioTres(int a, int b, int c) {
        int min = a;
        if (b < min) min = b;
        if (c < min) min = c;

        int max = a;
        if (b > max) max = b;
        if (c > max) max = c;

        return a + b + c - min - max;
    }
}
