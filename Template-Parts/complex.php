    <div class="complexia-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="complexia-section-heading">
                        <h3>Рассчитайте, через сколько дней Вы начнете зарабатывать в плюс!</h3>
                    </div>

                    <div class="complexia-section-body">
                        <div class="complexia-top-data">
                            <h1>Расчет окупаемости курса</h1>
                        </div>

                        <div class="complexia-middle-data">
                            <!-- <form action="" class="equation-form-bar"> -->
                            <div class="equation-form-bar">
                                <div class="equation-form-bar-single-section">
                                    <h3>Стоимость курса</h3>
                                    <p>Сколько стоит обучиться на мастера в Вашем городе?</p>
                                    <input type="hidden" class="single-slider mobile-display-none" />

                                    <select id="course-cost" class="single-slider-dropdown">
                                        <option value="30000">30000</option>
                                        <option value="32000">32000</option>
                                        <option value="34000">34000</option>
                                        <option value="36000">36000</option>
                                        <option value="38000">38000</option>
                                        <option value="40000">40000</option>
                                        <option value="42000">42000</option>
                                        <option value="44000">44000</option>
                                        <option value="46000">46000</option>
                                        <option value="48000">48000</option>
                                        <option value="50000">50000</option>
                                    </select>
                                </div>

                                <div class="equation-form-bar-single-section">
                                    <h3>Количество учеников</h3>
                                    <p>Сколько человек в месяц Вы готовы обучать?</p>
                                    <input type="hidden" class="single-slider-2 mobile-display-none" />

                                    <select id="number-of-student" class="single-slider-dropdown">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                    </select>
                                </div>

                                <div class="equation-form-bar-select-btn">
                                    <div class="col-md-6">
                                        <label class="containerx"> Учесть аренду и расходные материалы
                                            <input type="checkbox" checked="checked" name="twenty_percent">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="containerx"> Учесть затраты на рекламу
                                            <input type="checkbox" name="ten_percent">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>


                                <div class="equation-form-submit-btn">
                                    <input type="submit" value="Рассчитать" class="slider-calculation-submit">
                                </div>

                            </div>
                            <!-- </form> -->


                            <div class="complexia-middle-info-data">
                                <h3>Итоги</h3>
                                
                                <div class="complexia-info-list-data">
                                    <ul>
                                        <li>
                                            Курс окупится в течение
                                            <span class="list-data-color value-of-A">7</span> дня (-ей)
                                        </li>
                                        <li>
                                            За месяц Вы заработаете
                                            <span class="list-data-color value-of-B">200000</span> руб.
                                        </li>
                                        <li>
                                            За год Вы заработаете
                                            <span class="list-data-color value-of-C">2088000 </span> руб.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="complexia-bottom-data">
                            
                            <div class="col-md-6 col-md-offset-1 complexia-bottom-form">
                                <h2>Инвестируй в себя</h2>
                                <div class="complexia-bottom-data-form">
                                    <?php dynamic_sidebar( 'complex-area-form' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>