public class TieneDescuento {
    public static boolean tieneDescuento(int monto, boolean esEmpleado) {
        return monto > 100 || esEmpleado;
    }
}
