/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package calculosalario;

import java.util.*;
import java.util.Scanner;
/**
 *
 * @author isaac
 */
public class CalculoSalario {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
    String nombre="";
    int salario=0;
    int diastrabajados=0;
    int salariodiario=0;
    
    Scanner teclado=new Scanner(System.in);
    System.out.println("Ingrese su nombre: ");
    nombre=teclado.nextLine();
    System.out.println("Ingrese su salario basico: ");
    salario=teclado.nextInt();
    System.out.println("Ingrese sus dias trabajados: ");
    diastrabajados=teclado.nextInt();
    salariodiario=salario/diastrabajados;
    System.out.println("Señor/a "+nombre+" su salario diario es de: "+salariodiario+" pesos.");
    
    
    }
    
}
