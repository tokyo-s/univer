package com.company;

public class Paralelipiped extends GeometricBody{
    public Paralelipiped(double l, double w, double h) {
        super(l, w, h);
    }

    public double getSurface() {
        return (l*w+l*h+w*h)*2;
    }

    public double getVolume() {
        return l*w*h;
    }
}
