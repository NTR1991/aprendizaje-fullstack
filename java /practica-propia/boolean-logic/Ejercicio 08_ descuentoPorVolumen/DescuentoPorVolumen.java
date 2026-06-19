public class DescuentoPorVolumen {
    public static boolean descuentoPorVolumen(int cantidad, boolean esClienteFrecuente) {
        if (cantidad == 0) {
            return false;
        }
        return cantidad >= 10 || esClienteFrecuente;
    }
}
