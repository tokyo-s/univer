package com.company;

public abstract class GeometricBody implements IGeometricBody {
    protected double l;
    protected double w;
    protected double h;

    public GeometricBody(double l, double w, double h) {
        this.l = l;
        this.w = w;
        this.h = h;
    }

    public GeometricBody(double l, double w) {
        this.l = l;
        this.w = w;
    }

    public abstract double getSurface();
    public abstract double getVolume();
}
