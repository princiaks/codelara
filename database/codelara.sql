PGDMP         ,            	    {            codelara    15.2    15.2 	    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    216469    codelara    DATABASE     {   CREATE DATABASE codelara WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_India.1252';
    DROP DATABASE codelara;
                postgres    false            �            1259    216470    users    TABLE     j  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp with time zone,
    password character varying(255) NOT NULL,
    passwordview character varying(255),
    created_at timestamp without time zone,
    updated_at timestamp without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    216475    users_id_seq    SEQUENCE     �   ALTER TABLE public.users ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    214            �          0    216470    users 
   TABLE DATA           s   COPY public.users (id, name, email, email_verified_at, password, passwordview, created_at, updated_at) FROM stdin;
    public          postgres    false    214   �	       �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 14, true);
          public          postgres    false    215            f           2606    216477    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    214            �      x������ � �     