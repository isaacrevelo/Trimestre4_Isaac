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
public class Ejercicio8_2 {
    public static void main(String[] args) {
 
         
        String texto=JOptionPane.showInputDialog("Introduce un caracter ASCII");
        //Pasamos el String a char con el metodo charAt
        char caracter=texto.charAt(0);
  
        //Pasamos el caracter a codigo
        int codigo=(int)caracter;
  
        System.out.println(codigo);
    }
}
