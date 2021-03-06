USE [Blog_Master]
GO
/****** Object:  Table [dbo].[Usuarios]    Script Date: 8/19/2019 3:17:36 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Usuarios](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[Nombre] [varchar](50) NOT NULL,
	[Apellido] [varchar](50) NOT NULL,
	[Email] [varchar](100) NOT NULL,
	[Pass] [varchar](255) NOT NULL,
	[Fecha_Registro] [date] NOT NULL,
 CONSTRAINT [PK_Usuarios] PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Categorias]    Script Date: 8/19/2019 3:17:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Categorias](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[Nombre] [varchar](100) NOT NULL,
 CONSTRAINT [PK_Categorias] PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Entradas]    Script Date: 8/19/2019 3:17:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Entradas](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[Id_Usuarios] [int] NOT NULL,
	[Id_Categorias] [int] NOT NULL,
	[Titulo] [varchar](150) NOT NULL,
	[Descripcion] [nvarchar](max) NULL,
	[Fecha_Publicacion] [date] NOT NULL,
 CONSTRAINT [PK_Entradas] PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  View [dbo].[VW_Autor_entradas]    Script Date: 8/19/2019 3:17:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE VIEW [dbo].[VW_Autor_entradas] AS
SELECT e.id AS 'Clave',e.Titulo,u.Nombre AS 'Autor',c.Nombre AS 'Categorias'
FROM Entradas e
INNER JOIN Usuarios u ON e.Id_Usuarios = u.Id
INNER JOIN Categorias c ON e.Id_Categorias = c.Id;
GO
SET IDENTITY_INSERT [dbo].[Categorias] ON 

INSERT [dbo].[Categorias] ([Id], [Nombre]) VALUES (1, N'Acion')
INSERT [dbo].[Categorias] ([Id], [Nombre]) VALUES (2, N'Suvivar')
INSERT [dbo].[Categorias] ([Id], [Nombre]) VALUES (3, N'Aventura')
INSERT [dbo].[Categorias] ([Id], [Nombre]) VALUES (4, N'Deportes')
SET IDENTITY_INSERT [dbo].[Categorias] OFF
SET IDENTITY_INSERT [dbo].[Entradas] ON 

INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (2, 1, 1, N'GTA 5', N'Nueva Actualisacion.', CAST(N'2019-08-19' AS Date))
INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (3, 1, 2, N'ARK', N'Nueva DLC.', CAST(N'2019-08-19' AS Date))
INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (4, 1, 3, N'Zelda Ocarina OF Time', N'REVIWER PARA Play Stacion.', CAST(N'2019-08-19' AS Date))
INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (5, 2, 1, N'Galaxy of Fire', N'Nueva Espancion.', CAST(N'2019-08-13' AS Date))
INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (6, 2, 2, N'Minecraf', N'Nueva Actualisacion 14.10.', CAST(N'2019-08-13' AS Date))
INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (7, 2, 3, N'UNCHAERTE', N'Retraso en el lansamiento.', CAST(N'2019-08-13' AS Date))
INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (8, 3, 1, N'Contra Straiker', N'Nueva Actualisacion', CAST(N'2019-08-19' AS Date))
INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (9, 3, 2, N'Spore', N'Nueva Actualisacion', CAST(N'2019-08-19' AS Date))
INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (10, 3, 1, N'Spore 2', N'Nueva Lanzamiento para diciembre.', CAST(N'2019-08-19' AS Date))
INSERT [dbo].[Entradas] ([Id], [Id_Usuarios], [Id_Categorias], [Titulo], [Descripcion], [Fecha_Publicacion]) VALUES (11, 1, 1, N'SQLLITE', N'LO ultimo', CAST(N'2019-08-13' AS Date))
SET IDENTITY_INSERT [dbo].[Entradas] OFF
SET IDENTITY_INSERT [dbo].[Usuarios] ON 

INSERT [dbo].[Usuarios] ([Id], [Nombre], [Apellido], [Email], [Pass], [Fecha_Registro]) VALUES (1, N'Emmanuel', N'Dominguez', N'eulloa@pgr.gob.do', N'123456', CAST(N'2019-08-14' AS Date))
INSERT [dbo].[Usuarios] ([Id], [Nombre], [Apellido], [Email], [Pass], [Fecha_Registro]) VALUES (2, N'Nairoby', N'Soto', N'nsoto@pgr.gob.do', N'123456', CAST(N'2017-02-15' AS Date))
INSERT [dbo].[Usuarios] ([Id], [Nombre], [Apellido], [Email], [Pass], [Fecha_Registro]) VALUES (3, N'Carlos', N'Calderon', N'ccalderon@pgr.gob.do', N'123456', CAST(N'2016-08-05' AS Date))
INSERT [dbo].[Usuarios] ([Id], [Nombre], [Apellido], [Email], [Pass], [Fecha_Registro]) VALUES (4, N'Jorge', N'Villalona', N'jvillalona@pgr.gob.do', N'123456789123', CAST(N'2018-06-21' AS Date))
INSERT [dbo].[Usuarios] ([Id], [Nombre], [Apellido], [Email], [Pass], [Fecha_Registro]) VALUES (5, N'Edwar', N'Encarnacion', N'eencarnacion@pgr.gob.do', N'123321', CAST(N'2019-08-19' AS Date))
SET IDENTITY_INSERT [dbo].[Usuarios] OFF
SET ANSI_PADDING ON
GO
/****** Object:  Index [UQ_Email]    Script Date: 8/19/2019 3:17:37 PM ******/
ALTER TABLE [dbo].[Usuarios] ADD  CONSTRAINT [UQ_Email] UNIQUE NONCLUSTERED 
(
	[Email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Entradas]  WITH CHECK ADD  CONSTRAINT [FK_Entradas_Categorias] FOREIGN KEY([Id_Categorias])
REFERENCES [dbo].[Categorias] ([Id])
GO
ALTER TABLE [dbo].[Entradas] CHECK CONSTRAINT [FK_Entradas_Categorias]
GO
ALTER TABLE [dbo].[Entradas]  WITH CHECK ADD  CONSTRAINT [FK_Entradas_Usuarios] FOREIGN KEY([Id_Usuarios])
REFERENCES [dbo].[Usuarios] ([Id])
GO
ALTER TABLE [dbo].[Entradas] CHECK CONSTRAINT [FK_Entradas_Usuarios]
GO
