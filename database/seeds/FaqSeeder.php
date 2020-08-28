<?php

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert ([
            'question'  => 'Cuál es la edad mínima para poder alquilar un coche?',
            'answer'  => 'La edad mínima establecida por las compañías de alquiler es de 21 años.
Algunas compañías de alquiler permiten el alquiler a menores de 21 años mediante el pago de una tasa adicional. Si este es tu caso y tienes alguna duda, entra en contacto con nosotros a través de nuestra Central de Reservas y solicita más detalles.
            ',
            'category_id'  => 8,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => 'Puedo alquilar un vehículo sin tener tarjeta de crédito?',
            'answer'  => 'Al recoger el vehículo en la compañía de alquiler es obligatorio presentar una tarjeta de crédito a nombre del titular de la reserva, que sea válida, emitida por una institución bancaria y con un límite disponible suficiente para el depósito de garantía.
            Algunas compañías de alquiler ofrecen la posibilidad de incluir un Responsable Financiero a modo de Conductor Adicional cobrando una tasa adicional e',
            'category_id'  => 8,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => '¿Qué documentos debo presentar para recoger mi vehículo?',
            'answer'  => 'Documento de Confirmación de reserva impreso, permiso de conducir válido, pasaporte nacional y tarjeta de crédito internacional a nombre del titular de la reserva y con límite disponible para el depósito de garantía.
            ',
            'category_id'  => 8,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => '¿Hay elementos no cubiertos por los seguros?',
            'answer'  => 'Si. Normalmente las compañías de alquiler no ofrecen cobertura de daños para elementos como:
            Accesorios, neumáticos, llantas y suspensión dañada por agujeros o bordillos.
            Arañazos o abolladuras, grietas en el parabrisas, daños causados por inundaciones o cualquier otro fenómeno natural.
            Pérdida o daño de la llave o documentación del vehículo.
           Estos elementos pueden variar entre compañías de alquiler. Cuando recojas tu vehículo, confirma todos los detalles sobre las coberturas ofrecidas, así como los ítems que no están cubiertos.
            ',
            'category_id'  => 1,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => '¿Cómo proceder en caso de cobros extra?',
            'answer'  => 'En caso de que el valor cobrado por la compañía de alquiler sea superior al valor contratado a través de Rentcars.com, asegúrate de preguntar a la compañía de alquiler a que se debe. Es común que las compañías de alquiler te ofrezcan una variedad de servicios extra en el mostrador en el momento de la firma del contrato de alquiler. Estos ítems no son obligatorios para recoger el vehículo, y contratarlos es completamente opcional.
            Antes de firmar el contrato es recomendable que lo leas con detalle. En caso de duda, pregunta al empleado o, entra en contacto con nuestra Central de Reservas.
            Importante: de manera posterior la compañía de alquiler puede cargar en tu tarjeta los servicios de peaje o multas de tráfico originados durante el alquiler.',
            'category_id'  => 2,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => '¿Qué ocurre si me atraso en la devolución del vehículo?',
            'answer'  => '¿Qué ocurre si me atraso en la devolución del vehículo?',
            'category_id'  => 4,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => '¿Cómo funciona el depósito de garantía?',
            'answer'  => 'Al firmar el contrato de alquiler, el titular de la reserva debe presentar una tarjeta de crédito internacional a su nombre y con límite disponible para bloquear una cantidad específica determinada por la compañía según la categoría del vehículo y el periodo de alquiler.
            Esta cantidad no será cobrada. Se trata de una garantía para la compañía de alquiler. Cuando devuelvas el vehículo la compañía de alquiler solicitará el desbloqueo de la cantidad. El plazo de la efectuación del desbloqueo dependerá de la operadora de la tarjeta de crédito.  ',
            'category_id'  => 3,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => '¿Qué hago si necesito cancelar mi reserva?',
            'answer'  => 'Puedes modificar o cancelar tu reserva accediendo a tu cuenta con el nombre de usuario y contraseña usados para registrarte. Te recomendamos que leas atentamente las condiciones de modificación y cancelación expuestas en el Cupón de Confirmación de reserva enviado a tu e-mail, o accediendo a la pa?ina Mis Reservas en Área del Cliente.

            También puedes solicitar la cancelación de tu reserva a través de la Central de Reservas Rentcars.com. Las reservas nacionales e internacionales contratadas con modo de pago en destino no tienen tasa de cancelación. En el caso de reservas internacionales con modo de prepago total o parcial, será cargada una cantidad equivalente al 5% del valor total de la reserva para cubrir gastos administrativos. Te recomendamos siempre cancelar tu reserva de manera anticipada evitando así posibles cobros de tasas no-show, cargadas directamente por la compañía de alquiler.
            ',
            'category_id'  => 4,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => '¿Y qué no está incluido?',
            'answer'  => 'No están incluidos en el valor de alquiler los servicios opcionales cuando sean contratados directamente en la oficina de alquiler. Algunos de estos servicios incluyen coberturas de daños adicionales, asientos especiales para bebés o niños, GPS, responsable financiero y conductor adicional entre otros.',
            'category_id'  => 6,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => '¿Qué hago si necesito cancelar mi reserva?',
            'answer'  => 'Puedes modificar o cancelar tu reserva accediendo a tu cuenta con el nombre de usuario y contraseña usados para registrarte. Te recomendamos que leas atentamente las condiciones de modificación y cancelación expuestas en el Cupón de Confirmación de reserva enviado a tu e-mail, o accediendo a la pa?ina Mis Reservas en Área del Cliente.

            También puedes solicitar la cancelación de tu reserva a través de la Central de Reservas Rentcars.com. Las reservas nacionales e internacionales contratadas con modo de pago en destino no tienen tasa de cancelación. En el caso de reservas internacionales con modo de prepago total o parcial, será cargada una cantidad equivalente al 5% del valor total de la reserva para cubrir gastos administrativos. Te recomendamos siempre cancelar tu reserva de manera anticipada evitando así posibles cobros de tasas no-show, cargadas directamente por la compañía de alquiler.
            ',
            'category_id'  => 4,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => 'Cómo saber si mi reserva está confirmada?',
            'answer'  => 'Puedes modificar o cancelar tu reserva accediendo a tu cuenta con el nombre de usuario y contraseña usados para registrarte. Te recomendamos que leas atentamente las condiciones de modificación y cancelación expuestas en el Cupón de Confirmación de reserva enviado a tu e-mail, o accediendo a la pa?ina Mis Reservas en Área del Cliente.

            También puedes solicitar la cancelación de tu reserva a través de la Central de Reservas Rentcars.com. Las reservas nacionales e internacionales contratadas con modo de pago en destino no tienen tasa de cancelación. En el caso de reservas internacionales con modo de prepago total o parcial, será cargada una cantidad equivalente al 5% del valor total de la reserva para cubrir gastos administrativos. Te recomendamos siempre cancelar tu reserva de manera anticipada evitando así posibles cobros de tasas no-show, cargadas directamente por la compañía de alquiler.
            ',
            'category_id'  => 4,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => '¿Cómo funciona la política de uso de combustible?',
            'answer'  => 'De manera estándar el vehículo es entregado al cliente con el depósito de combustible lleno y por lo tanto debe ser devuelto de la misma forma. En el caso en el que no sea devuelto según los criterios establecidos en el contrato, el reabastecimiento será cobrado usando la base de precios disponible en el mostrador de la de la compañía de alquiler.
            Para los que opten por recoger el vehículo con el servicio de entrega en aeropuerto, el vehículo puede presentar un nivel de combustible un poco menor debido al desplazamiento de la oficina de alquiler hasta el mismo aeropuerto. En este caso, el reabastecimiento del vehículo el dia de la devolución deberá seguir los criterios de la compañía de alquiler. Para reservas internacionales, al optar por un paquete de servicios que incluya “Depósito Lleno”, no será necesario devolver el vehículo abastecido. También, es importante saber que el combustible que quede en el depósito no será reembolsado.
            ',
            'category_id'  => 7,
            'lang_id'              => '1',


        ]);
        DB::table('faqs')->insert ([
            'question'  => 'Cómo saber si mi reserva está confirmada?',
            'answer'  => 'Después de completar el proceso de solicitud de reserva, podrás acompañar el estado de tu pedido a través de la página Mis Reservas. También te enviaremos un e-mail de confirmación con todos los detalles de tu reserva.
            ',
            'category_id'  => 5,
            'lang_id'              => '1',


        ]);



    }
}
