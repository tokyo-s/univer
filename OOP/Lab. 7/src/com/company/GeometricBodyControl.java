package com.company;

import java.util.ArrayList;

public class GeometricBodyControl {

    static public GeometricBody BiggestVolume(ArrayList<GeometricBody> geometricBodies){
        double max=0.d;
        GeometricBody body = null;
        for (GeometricBody t : geometricBodies){
            if(t.getVolume() > max){
                max = t.getVolume();
                body = t;
            }
        }
        return body;
    }

    static public GeometricBody BiggestAria(ArrayList<GeometricBody> geometricBodies){
        double max=0.d;
        GeometricBody body = null;
        for (GeometricBody t : geometricBodies){
            if(t.getSurface() > max){
                max = t.getSurface();
                body = t;
            }
        }
        return body;
    }

}
