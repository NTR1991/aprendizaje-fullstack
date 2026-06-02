public class PuedeConducir {
    public static boolean puedeConducir(int edad, boolean tieneLicencia, boolean esPractica) {
        if (esPractica && edad >= 16) {
            return true;
        }
        if (edad >= 65) {
            return true;
        }
        return edad >= 18 && tieneLicencia;
    }
}
