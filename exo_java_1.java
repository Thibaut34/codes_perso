public class Exo {
    
    public static void main(String[] args) {
        String test = "hello";
        System.out.println(test);
    }
    
}
class Telephone {
        int pixels;
        String nom;
        Marque marque;
        public Telephone(int pixels, String nom, Marque marque){
            this.pixels = pixels;
            this.nom = nom;
            this.marque = marque;
        }
}
class Marque {
    String nom;
    public Marque(String nom){
        this.nom = nom;
    }
}
