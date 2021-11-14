package com.company;

import java.util.ArrayList;

public class Main {

    public static void main(String[] args) {
        Cube cub = new Cube(3d,3d,3d);
        Sfera sfera = new Sfera(1d,Math.PI);
        Paralelipiped para = new Paralelipiped(1d,2d,3d);
        ArrayList<GeometricBody> geometricBodies = new ArrayList<>();
        geometricBodies.add(sfera);
        geometricBodies.add(cub);
        geometricBodies.add(para);

        for(GeometricBody t : geometricBodies){
            System.out.print("Suprafata:");
            System.out.println(t.getSurface());
            System.out.print("Volum:");
            System.out.println(t.getVolume());
        }

        GeometricBody maxVolumeObj = GeometricBodyControl.BiggestVolume(geometricBodies);
        GeometricBody maxAriaObj = GeometricBodyControl.BiggestAria(geometricBodies);

        System.out.print("Volum maxim:");
        System.out.println(maxVolumeObj.getVolume());
        System.out.print("Aria maxima:");
        System.out.println(maxAriaObj.getSurface());
    }
}
