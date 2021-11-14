package com.company;

public class Cube extends GeometricBody{
    public Cube(double l, double w, double h) {
        super(l, w, h);
    }

    public double getSurface() {
        return 2*(l*w+l*h+w*h);
    }

    public double getVolume() {
        return l*w*h;
    }
}
