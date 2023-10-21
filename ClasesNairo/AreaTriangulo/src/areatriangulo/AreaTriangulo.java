/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package areatriangulo;

import java.util.*;
import java.util.Scanner;
/**
 *
 * @author isaac
 */
public class AreaTriangulo {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
    int base=0;
    int altura=0;
    int area=0;
    
    Scanner teclado=new Scanner(System.in);
    System.out.println("Ingrese la longitud de la base del triangulo: ");
    base=teclado.nextInt();
    System.out.println("Ingrese la longitud de la altura del triangulo: ");
    altura=teclado.nextInt();
    area=base*altura/2;
    System.out.println("El area del triangulo es de: "+area);
    
    }
    
}
