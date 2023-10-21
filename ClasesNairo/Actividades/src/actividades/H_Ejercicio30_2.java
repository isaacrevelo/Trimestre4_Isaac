/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package actividades;
import javax.swing.JOptionPane;
/**
 *
 * @author isaac
 */
public class H_Ejercicio30_2 {
    public static void main(String[] args) {
         
        String texto=JOptionPane.showInputDialog(null, 
                                                "Por favor, introduce una frase", 
                                                "Introducción", 
                                                JOptionPane.INFORMATION_MESSAGE);
         
        String cadenaResultante;
         
        //true = Lo pasamos todo a mayusculas
        //false= Lo pasamos todo a minusculas
        boolean isMayus;
         
        int eleccion=JOptionPane.showConfirmDialog(null, 
                                        "¿Quieres que se pase a mayusculas?", 
                                        "Eleccion", 
                                        JOptionPane.YES_NO_OPTION);
         
        isMayus=  (eleccion==JOptionPane.YES_OPTION);
         
        //Segun lo elegido, lo transformaremos a mayuscula o minuscula
        if(isMayus){
             cadenaResultante=texto.toUpperCase();
        }else{
            cadenaResultante=texto.toLowerCase();
        }
 
        //Mostramos el mensaje resultante
        JOptionPane.showMessageDialog(null, 
                                        cadenaResultante, 
                                        "Resultado", 
                                        JOptionPane.INFORMATION_MESSAGE);
         
    }
}
