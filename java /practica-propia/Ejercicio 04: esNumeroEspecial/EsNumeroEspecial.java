public class EsNumeroEspecial {
    public static boolean esNumeroEspecial(int numero) {
        if (numero == 7) {
            return false;
        }
        return numero >= 5 && numero <= 10;
    }
}
