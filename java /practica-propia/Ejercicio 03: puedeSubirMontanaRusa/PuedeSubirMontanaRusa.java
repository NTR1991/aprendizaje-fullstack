public class PuedeSubirMontanaRusa {
    public static boolean puedeSubirMontanaRusa(int altura, boolean tieneAcompanante) {
        return altura >= 120 && (tieneAcompanante || altura >= 140);
    }
}
