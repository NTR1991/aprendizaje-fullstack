public class PuedeVotar {
    public static boolean puedeVotar(int edad, boolean esCiudadano) {
        return edad >= 18 && esCiudadano;
    }
}
