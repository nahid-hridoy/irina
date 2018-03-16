    <?php

        $count_down_course_name = cs_get_option('contdown_course_title');
        $count_down_date = cs_get_option('contdown_course_last_date');

    ?>

    <div class="time-counter">
        <div class="container">
            <div class="row">
                <div class="time-counter-body">

                    <h1>Торопитесь! До старта осталось:</h1>
                    <div class="t-c-main">
                        <div class="t-c-main-left">
                            <h4>Ближайший тренерский курс</h4>
                            <h3><?php echo $count_down_course_name; ?></h3>
                        </div>
                        <div class="t-c-main-right">
                            <div class="count-down-timer-wrap">
                                <input type="hidden" id="StartDate" value="<?php echo $count_down_date; ?>">
                                <div id="clock"></div>
                            </div>
                            <input type="submit" class="register-course-btn" value="Записаться на курс">
                        </div>
                    </div>

                    <div class="t-c-bottom">

                        <h3>Не подходит эта группа? Позвоните, и мы поможем подобрать удобную дату</h3>
                        <h4>Или закажите обратный звонок</h4>
                        <input type="submit" class="call-me-back-course-form" value="Обратный звонок">

                    </div>



                </div>
            </div>
        </div>
    </div>

  