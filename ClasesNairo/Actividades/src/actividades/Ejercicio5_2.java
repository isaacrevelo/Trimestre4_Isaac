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
public class Ejercicio5_2 {
    public static void main(String[] args) {
 
        String texto=JOptionPane.showInputDialog("Introduce un radio");
        //Pasamos el String a double
        double radio=Double.parseDouble(texto);
 
        //Formula area circulo, usamos algunos de los metodos de Math
        double area=Math.PI*Math.pow(radio, 2);
 
        System.out.println("El area del circulo es "+area);
    }
}
