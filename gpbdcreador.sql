DROP DATABASE IF EXISTS gp;

CREATE DATABASE gp;

use gp;

Create Table
    departamento(
        id_departamento INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80) NOT NULL,
        PRIMARY KEY(id_departamento)
    );

Create Table
    municipio(
        id_municipio INT AUTO_INCREMENT NOT NULL,
        id_departamento INT,
        PRIMARY KEY(id_municipio),
        CONSTRAINT FK_departamento_municipio FOREIGN KEY (id_departamento) REFERENCES departamento(id_departamento)
    );

Create Table
    tipo_identificaccion(
        id_tipo_identificaccion INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80) NOT NULL,
        PRIMARY KEY(id_tipo_identificaccion)
    );

CREATE Table
    tipo_entidad(
        id_tipo_entidad INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80) NOT NULL,
        PRIMARY KEY(id_tipo_entidad)
    );

CREATE TABLE
    tipo_identificacion(
        id_tipo_identificacion INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80) NOT NULL,
        PRIMARY KEY(id_tipo_identificacion)
    );

CREATE TABLE
    entidad(
        id_entidad INT AUTO_INCREMENT NOT NULL,
        nombre VARCHAR(80) NOT NULL,
        id_tipo_entidad INT,
        identificacion VARCHAR(80) NOT NULL,
        id_tipo_identificacion INT,
        direccion VARCHAR(80) NOT NULL,
        telefono INT,
        correo_electronico VARCHAR(80) NOT NULL,
        id_municipio INT NOT NULL,
        PRIMARY KEY(id_entidad),
        CONSTRAINT FK_tipo_identificacion_entidad FOREIGN KEY (id_tipo_identificacion) REFERENCES tipo_identificacion(id_tipo_identificacion),
        CONSTRAINT FK_tipo_municipio_entidad FOREIGN KEY (id_municipio) REFERENCES municipio(id_municipio),
        CONSTRAINT FK_tipo_entidad_entidad FOREIGN KEY (id_tipo_entidad) REFERENCES tipo_entidad(id_tipo_entidad)
    );

CREATE TABLE
    cliente(
        id_cliente INT AUTO_INCREMENT NOT NULL,
        id_entidad INT,
        PRIMARY KEY(id_cliente),
        CONSTRAINT FK_entidad_cliente FOREIGN KEY (id_entidad) REFERENCES entidad(id_entidad)
    );

CREATE TABLE
    proveedor(
        id_proveedor INT AUTO_INCREMENT NOT NULL,
        id_entidad INT,
        PRIMARY KEY(id_proveedor),
        CONSTRAINT FK_entidad_proveedor FOREIGN KEY (id_entidad) REFERENCES entidad(id_entidad)
    );

CREATE TABLE
    tipo_producto(
        id_tipo_producto INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80) NOT NULL,
        PRIMARY KEY(id_tipo_producto)
    );

CREATE TABLE
    producto(
        id_producto INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80) NOT NULL,
        codigo_comercial VARCHAR(80),
        id_tipo_producto INT NOT NULL,
        unidad_medida VARCHAR (80) NOT NULL,
        precio_compra DOUBLE,
        precio_venta DOUBLE,
        PRIMARY KEY(id_producto),
        CONSTRAINT FK_tipo_producto_producto FOREIGN KEY (id_tipo_producto) REFERENCES tipo_producto(id_tipo_producto)
    );

CREATE TABLE
    iva(
        id_iva INT AUTO_INCREMENT NOT NULL,
        porcentaje DOUBLE,
        PRIMARY KEY(id_iva)
    );

CREATE TABLE
    factura_venta(
        id_factura_venta INT AUTO_INCREMENT NOT NULL,
        id_cliente INT NOT NULL,
        id_iva INT,
        fecha DATE,
        descripcion varchar(80),
        total_factura DOUBLE NOT NULL,
        anulado BOOLEAN DEFAULT 0,
        PRIMARY KEY(id_factura_venta),
        CONSTRAINT FK_factura_venta_iva FOREIGN KEY (id_iva) REFERENCES iva(id_iva),
        CONSTRAINT FK_factura_venta_cliente FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
    );

CREATE TABLE
    producto_factura_venta(
        id_factura_venta INT NOT NULL,
        id_producto INT NOT NULL,
        cantidad DOUBLE NOT NULL,
        total DOUBLE NOT NULL,
        CONSTRAINT FK_factura_venta_producto_factura_venta FOREIGN KEY (id_factura_venta) REFERENCES factura_venta(id_factura_venta),
        CONSTRAINT FK_producto_producto_factura_venta FOREIGN KEY (id_producto) REFERENCES producto(id_producto)
    );

CREATE TABLE
    factura_compra(
        id_factura_compra INT AUTO_INCREMENT NOT NULL,
        id_proveedor INT NOT NULL,
        id_iva INT,
        fecha DATE,
        descripcion varchar(80),
        total_factura DOUBLE NOT NULL,
        PRIMARY KEY(id_factura_compra),
        CONSTRAINT FK_iva_factura_compra FOREIGN KEY (id_iva) REFERENCES iva(id_iva),
        CONSTRAINT FK_cliente_factura_compra FOREIGN KEY (id_proveedor) REFERENCES proveedor(id_proveedor)
    );

CREATE TABLE
    producto_factura_compra(
        id_factura_compra INT NOT NULL,
        id_producto INT NOT NULL,
        cantidad DOUBLE NOT NULL,
        total DOUBLE NOT NULL,
        CONSTRAINT FK_factura_compra_producto_factura_compra FOREIGN KEY (id_factura_compra) REFERENCES factura_compra(id_factura_compra),
        CONSTRAINT FK_producto_producto_factura_compra FOREIGN KEY (id_producto) REFERENCES producto(id_producto)
    );

CREATE TABLE
    usuario(
        id_usuario INT AUTO_INCREMENT NOT NULL,
        id_entidad INT,
        nombre_usuario VARCHAR(80),
        contrasenia VARCHAR(80),
        PRIMARY KEY(id_usuario),
        CONSTRAINT FK_entidad_usuario FOREIGN KEY (id_entidad) REFERENCES entidad(id_entidad)
    );

CREATE TABLE
    presupuesto(
        id_presupuesto INT AUTO_INCREMENT NOT NULL,
        fecha_inicio DATE,
        fecha_fin DATE,
        saldo_inicial DOUBLE,
        id_usuario INT NOT NULL,
        PRIMARY KEY(id_presupuesto),
        CONSTRAINT FK_usuario_presupuesto FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
    );

CREATE TABLE
    ingresos_presupuestados(
        id_ingresos_presupuestados INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80),
        valor_ingreso DOUBLE,
        id_presupuesto INT NOT NULL,
        PRIMARY KEY(id_ingresos_presupuestados),
        CONSTRAINT FK_presupuesto_ingresos_presupuestados FOREIGN KEY (id_presupuesto) REFERENCES presupuesto(id_presupuesto)
    );

CREATE TABLE
    gastos_presupuestados(
        id_gastos_presupuestados INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80),
        valor_gasto DOUBLE,
        id_presupuesto INT NOT NULL,
        PRIMARY KEY(id_gastos_presupuestados),
        CONSTRAINT FK_presupuesto_gastos_presupuestados FOREIGN KEY (id_presupuesto) REFERENCES presupuesto(id_presupuesto)
    );

CREATE TABLE
    ingresos_reales(
        id_ingresos_reales INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80),
        monto DOUBLE,
        fecha DATE,
        id_presupuesto INT NOT NULL,
        id_factura_venta INT,
        PRIMARY KEY(id_ingresos_reales),
        CONSTRAINT FK_factura_venta_ingresos_reales FOREIGN KEY (id_factura_venta) REFERENCES factura_venta(id_factura_venta),
        CONSTRAINT FK_presupuesto_ingresos_reales FOREIGN KEY (id_presupuesto) REFERENCES presupuesto(id_presupuesto)
    );

CREATE TABLE
    gastos_reales(
        id_gastos_reales INT AUTO_INCREMENT NOT NULL,
        descripcion VARCHAR(80),
        monto DOUBLE,
        fecha DATE,
        id_gastos_presupuestados INT NOT NULL,
        id_factura_compra INT,
        PRIMARY KEY(id_gastos_reales),
        CONSTRAINT FK_factura_compra_ingresos_reales FOREIGN KEY (id_factura_compra) REFERENCES factura_compra(id_factura_compra),
        CONSTRAINT FK_gastos_presupuestados_gastos_reales FOREIGN KEY (id_gastos_presupuestados) REFERENCES gastos_presupuestados(id_gastos_presupuestados)
    );