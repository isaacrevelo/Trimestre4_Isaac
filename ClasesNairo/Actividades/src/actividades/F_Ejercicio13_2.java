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
public class F_Ejercicio13_2 {
    public static void main(String[] args) {
 
        String texto=JOptionPane.showInputDialog("Introduce el número de ventas");
 
        //Pasamos el String a int
        int numVentas=Integer.parseInt(texto);
 
        /*Declaramos una variable para sumar las ventas,
         * si lo declaramos dentro del bucle, no podriamos
         * acceder fuera del bucle a la suma de las ventas.
         * Esto es por el ámbito.
         */
        int sumaVentas=0;
        for (int i=0;i<numVentas;i++){
            //indico el numero de venta
            texto=JOptionPane.showInputDialog("Introduce el precio de la venta"+(i+1));
            int venta=Integer.parseInt(texto);
 
            //Acumulamos el valor de la venta
            sumaVentas=sumaVentas+venta;
        }
 
        System.out.println(sumaVentas);
    }
}
