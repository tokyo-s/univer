package com.company;

public class Sfera extends GeometricBody{
    public Sfera(double l, double w) {
        super(l, w);
    }

    public double getSurface() {
        return l*l*w;
    }

    public double getVolume() {
        return (4*w*l*l*l)/3;
    }
}
