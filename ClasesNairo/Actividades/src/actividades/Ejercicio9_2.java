/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package actividades;
import javax.swing.JOptionPane;
/**
 *
 * @author SENA
 */
public class Ejercicio9_2 {
    public static void main(String[] args) {
 
        //Declaramos una constante
        final double IVA=0.21;
 
        String texto=JOptionPane.showInputDialog("Introduce el precio de un producto");
        //Pasamos el String a double
        double precio=Double.parseDouble(texto);
 
        //Obtenemos el precio final (precio+(precio*IVA))
        double precioFinal=precio+(precio*IVA);
 
        System.out.println(precioFinal);
    }
}
