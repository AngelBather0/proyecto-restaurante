@extends('layout-page')
@section('content')
    <div class="Content">
        <header class="Header">
            <div class="Header__top">
                <div class="container">
                    <div class="Header__top--container">
                        <div class="Header__top--text">
                            <p>Bienvenido a nuestro restaurante</p>
                            <img src="./images/checkTitle.svg" alt="">
                        </div>
                        <div class="Header__top--logo">
                            <img src="./images/logo.svg" alt="">
                        </div>
                        <div class="Header__top--social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Header__bottom">
                <div class="container">
                    <div class="Header__bottom--container">
                        <div class="Header__bottom--navbar">
                            <ul>
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Ordenes</a></li>
                                <li><a href="#">Mi Cuenta</a></li>
                            </ul>
                        </div>
                        <div class="Header__bottom--button">
                            <button>Realizar Pedido +</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="Content__port">
            <div class="Content__port--container">
                <div class="Content__port--title">
                    <h2>Restaurante Fresco y Delicioso</h2>
                </div>
                <div class="Content__port--subtitle">
                    <p>Disfruta de una experiencia gastronómica única en nuestro restaurante. Nuestro menú, elaborado con ingredientes frescos, ofrece una amplia variedad de sabores.</p>
                </div>
                <div class="Content__port--buttons">
                    <button>Descubrir Más +</button>
                    <button>Ver Menú +</button>
                </div>
            </div>
            <div class="portOverlay"></div>
        </div>
        <div class="fixedBackground"></div>
    </div>
    <div class="Content__about">
        <div class="container">
            <div class="Content__about--container">
                <div class="Content__about--title">
                    <h2>Marca Restfolio certificada desde 1997</h2>
                </div>
                <div class="Content__about--grid">
                    <div class="Content__about--banner">
                        <img src="./images/aboutBanner1.jpg" alt="">
                    </div>
                    <div class="Content__about--text">
                        <p>Nuestro restaurante ofrece una experiencia culinaria inigualable, con platos que combinan tradición e innovación. Ubicados en el corazón de la ciudad, nos enorgullece utilizar ingredientes frescos y de alta calidad para crear sabores únicos.</p>
                        <p>Nuestro ambiente acogedor y elegante, junto con un servicio excepcional, garantiza una velada memorable para todos nuestros comensales. Visítanos y descubre la pasión y el cuidado que ponemos en cada detalle.</p>
                        <button>Leer Más +</button>
                    </div>
                    <div class="Content__about--banner topMinusMargin">
                        <img src="./images/aboutBanner2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="fixedBackground"></div>
    </div>
    <div class="Content__tabsMenu">
        <div class="container">
            <div class="Content__tabsMenu--container">
                <div class="Content__tabsMenu--item">
                    <div class="Content__tabsMenu--icon">
                        <img src="./images/freshProducts.svg" alt="">
                    </div>
                    <div class="Content__tabsMenu--title">
                        <h2>Productos Frescos</h2>
                    </div>
                    <div class="Content__tabsMenu--text">
                        <p>Productos frescos que no te puedes perder a los precios más bajos del mercado.</p>
                    </div>
                    <div class="Content__tabsMenu--button">
                        <button>Ver Más</button>
                    </div>
                </div>
                <div class="Content__tabsMenu--item">
                    <div class="Content__tabsMenu--icon">
                        <img src="./images/skilletChef.svg" alt="">
                    </div>
                    <div class="Content__tabsMenu--title">
                        <h2>Skilled Chefs</h2>
                    </div>
                    <div class="Content__tabsMenu--text">
                        <p>Los platillos que nuestro chef recomienda, son sus especialidades.</p>
                    </div>
                    <div class="Content__tabsMenu--button">
                        <button>Ver Más</button>
                    </div>
                </div>
                <div class="Content__tabsMenu--item">
                    <div class="Content__tabsMenu--icon">
                        <img src="./images/drinksAndVines.svg" alt="">
                    </div>
                    <div class="Content__tabsMenu--title">
                        <h2>Bebidas y Vinos</h2>
                    </div>
                    <div class="Content__tabsMenu--text">
                        <p>Bebidas y vinos para acompañar tus platillos favoritos, hechas con los mejores ingredientes.</p>
                    </div>
                    <div class="Content__tabsMenu--button">
                        <button>Ver Más</button>
                    </div>
                </div>
                <div class="Content__tabsMenu--item">
                    <div class="Content__tabsMenu--icon">
                        <img src="./images/veganCuisine.svg" alt="">
                    </div>
                    <div class="Content__tabsMenu--title">
                        <h2>Cocina Vegana</h2>
                    </div>
                    <div class="Content__tabsMenu--text">
                        <p>Para tus preferencias nuestros platillos, comida 100% vegana cumpliendo al máximo tus exigencias.</p>
                    </div>
                    <div class="Content__tabsMenu--button">
                        <button>Ver Más</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="portOverlay"></div>
    </div>
    <div class="Content__ourMenu">
        <div class="container">
            <div class="Content__ourMenu--heading">
                <div class="Content__ourMenu--heading-icon">
                    <img src="./images/menuHeadingIcon.svg" alt="">
                </div>
                <div class="Content__ourMenu--heading-title">
                    <h2>Nuestros Menús Especiales</h2>
                </div>
                <div class="Content__ourMenu--heading-text">
                    <p>Descubre nuestro menú exquisito. Ofrecemos platos creados con pasión y los ingredientes más frescos. Desde entradas irresistibles hasta postres deliciosos, cada opción es una celebración de sabores. ¡Ven y disfruta de una experiencia culinaria única en cada bocado!</p>
                </div>
            </div>
            <div class="Content__ourMenu--container">
                <div class="Content__ourMenu--left">
                    <div class="Content__ourMenu--title">
                        <h2>Desayunos</h2>
                    </div>
                    <div class="Content__ourMenu--items">
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/breakfast1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Pancakes Deliciosos</h4>
                                <p>Pancakes que te harán saborearte la lengua, debes probarlos cuanto antes.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                            </div>
                        </div>
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/breakfast1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Pancakes Deliciosos</h4>
                                <p>Pancakes que te harán saborearte la lengua, debes probarlos cuanto antes.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                                <div class="discount">20% off</div>
                            </div>
                        </div>
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/breakfast1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Pancakes Deliciosos</h4>
                                <p>Pancakes que te harán saborearte la lengua, debes probarlos cuanto antes.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="Content__ourMenu--title">
                        <h2>Cenas</h2>
                    </div>
                    <div class="Content__ourMenu--items">
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/cenas1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Pollo A La Parrilla</h4>
                                <p>Un pollo a la parrilla exquisito, está para chuparse los dientes.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                            </div>
                        </div>
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/cenas1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Pollo A La Parrilla</h4>
                                <p>Un pollo a la parrilla exquisito, está para chuparse los dientes.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                                <div class="discount">20% off</div>
                            </div>
                        </div>
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/cenas1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Pollo A La Parrilla</h4>
                                <p>Un pollo a la parrilla exquisito, está para chuparse los dientes.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Content__ourMenu--right">
                    <div class="Content__ourMenu--title">
                        <h2>Almuerzos</h2>
                    </div>
                    <div class="Content__ourMenu--items">
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/almuerzo1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Kachchi Biryani</h4>
                                <p>Exquisito plato extranjero completamente sabroso, ideal si quieres probar cosas nuevas.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                                <div class="discount">20% off</div>
                            </div>
                        </div>
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/almuerzo1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Kachchi Biryani</h4>
                                <p>Exquisito plato extranjero completamente sabroso, ideal si quieres probar cosas nuevas.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                            </div>
                        </div>
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/almuerzo1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Kachchi Biryani</h4>
                                <p>Exquisito plato extranjero completamente sabroso, ideal si quieres probar cosas nuevas.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                            </div>
                        </div>
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/almuerzo1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Kachchi Biryani</h4>
                                <p>Exquisito plato extranjero completamente sabroso, ideal si quieres probar cosas nuevas.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="Content__ourMenu--title">
                        <h2>Bebidas Frías</h2>
                    </div>
                    <div class="Content__ourMenu--items">
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/bebidas1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Yogur Dulce Misti Doi</h4>
                                <p>Si buscas un compañero para tus platillos, este yogur sin duda debe ser tu primera opción.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                            </div>
                        </div>
                        <div class="Content__ourMenu--items-item">
                            <div class="Content__ourMenu--item-icon">
                                <img src="./images/bebidas1.jpg" alt="">
                            </div>
                            <div class="Content__ourMenu--item-details">
                                <h4>Yogur Dulce Misti Doi</h4>
                                <p>Si buscas un compañero para tus platillos, este yogur sin duda debe ser tu primera opción.</p>
                            </div>
                            <div class="Content__ourMenu--item-prices">
                                <h4>$5.00</h4>
                                <del>$8.00</del>
                                <div class="discount">20% off</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixedBackground"></div>
    </div>
    <footer class="Footer">
        <div class="Content__newsletter">
            <div class="container">
                <div class="Content__newsletter--heading">
                    <div class="Content__newsletter--logo">
                        <img src="./images/logo.svg" alt="">
                    </div>
                    <div class="Content__newsletter--text">
                        <p>Mantente al día con nuestras novedades. Suscríbete a nuestro boletín y recibe actualizaciones exclusivas sobre eventos, promociones y nuevas incorporaciones a nuestro menú.</p>
                    </div>
                    <div class="Content__newsletter--input">
                        <input type="text" placeholder="Ingresa tu correo electrónico...">
                        <button>Suscríbete Ahora!</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="Footer__bottom">
            <p><strong>MaybeDevelopers</strong>© 2024 | Todos los derechos reservados.</p>
        </div>
        <div class="fixedBackground"></div>
    </footer>
@endsection