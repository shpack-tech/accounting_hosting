<?php $title = 'Открытие компании в Грузии'; include 'templates/header.php'; ?>
    <section class="banner banner__video">
    	<div class="container">
    		<div class="banner__wrapper">
    			<div class="banner__wrapper-content">
    				<h1 class="banner__title">Откроем компанию и счет в банке Грузии</h1>
    				<p class="banner__text">
    					Специалисты Jara Accounting помогут Вам пройти все этапы от регистрации компании до подачи налоговых деклараций и
    					юридической поддержки.
    				</p>
    				<div class="banner__inner">
    					<video width="100%" height="auto" poster="images/pictures/banner__video-img1.png"></video>
    					<div class="play">
    						<div class="play__btn">
    							<div class="play__btn-triangle"></div>
    						</div>
    					</div>
    				</div>
    				<button class="btn btn-hover banner__btn">Получить консультацию</button>
    			</div>
    		</div>
    	</div>
    </section>

    <?php include 'templates/partners.php'; ?>

    <section class="quiz default_block">
		<div class="quiz_content">
			<div class="block_title container">Как за 4 шага открыть компанию в Грузии?</div>
			<div class="quiz_body">
				<div class="container quiz_align">
					<div class="quiz_left">
						<div class="quiz_pagination">
							<div class="number_bubble number_bubble-active current"><div>1</div></div>
							<div class="bubble_join-done"></div>
							<div class="bubble_join"></div>
							<div class="number_bubble"><div>2</div></div>
							<div class="bubble_join"></div>
							<div class="bubble_join"></div>
							<div class="number_bubble"><div>3</div></div>
							<div class="bubble_join"></div>
							<div class="bubble_join"></div>
							<div class="number_bubble"><div>4</div></div>
						</div>
						<div class="quiz_price" id="mobile_price">
							<p>Итоговая стоимость</p>
							<div id="mobile_quiz_input" class="quiz_price_value">$0</div>
						</div>
						<div class="step_num">1 шаг</div>
						<div class="quiz_slides_container">
							<div class="quiz_slide current_slide slide_aligned">
								<div class="quiz_stage_title">Выберите форму регистрации бизнеса</div>
								<button class="quiz_info">Показать информацию о формах и налогах</button>
								<div class="grid3col quiz_select_quiz_grid_element" id="business_type_container">
									<div data-value="individual_entrepreneur" class="quiz_grid_element">Индивидуальный предприниматель</div>
									<div data-value="ooo" class="quiz_grid_element">ООО</div>
									<div data-value="ooo_virtual" class="quiz_grid_element">ООО со статусом виртуальной зоны</div>
									<div data-value="nko" class="quiz_grid_element">Некоммерческая организация (НКО)</div>
									<div data-value="ao" class="quiz_grid_element">Акционерное общество (АО)</div>
									<div data-value="none" class="quiz_grid_element">Я не знаю какую форму мне выбрать</div>
								</div>
							</div>
							<div class="quiz_slide">
								<div class="quiz_stage_title">Сможете ли вы присутствовать лично при открытии бизнеса?</div>
								<div class="grid3col quiz_select_quiz_grid_element" id="quiz_personal">
									<div data-value="true" class="quiz_grid_element">Да, открыть бизнес с личным присутствием</div>
									<div data-value="false" class="quiz_grid_element">Нет, открыть бизнес удаленно</div>
								</div>
							</div>
							<div class="quiz_slide">
								<div class="quiz_stage_title">Для удаленного открытия ИП нужно:</div>
								<p>1. Подготовить доверенность у нотариуса и апостилировать ее. (5 дней)</p>
								<p>2. Передать копии паспорта собственника компании, наименование будущей компании на английском языке (2 дня)</p>
								<p>3. Далее мы с доверенностью и всем полученной документацией идем в дом Юстиции, подаем документы (2 дня)</p>
								<p>4. После идем в банк и открываем счет (2 дня)</p>
								<h2>Нужна ли вам печать компании? (+80$ к стоимости)</h2>
								<div class="quiz_radio_container">
									<div class="formfeedback__form-radiobtn__wrapper">
										<label class="quiz_label" for="yes">Да<input id="yes" type="radio" name="choice" /></label>
										<label class="quiz_label" for="no">Нет<input id="no" type="radio" name="choice" /></label>
										<label class="quiz_label" for="dont_know">Не знаю<input id="dont_know" type="radio" name="choice" /></label>
									</div>
								</div>
							</div>
							<div class="quiz_slide">
								<div class="quiz_stage_title">Подведем итоги:</div>
								<h2 id="final_price_inline">Итоговая стоимость -</h2>
								<p>Вы хотите открыть ИП удаленно, с бизнес-картой и печатью компании</p>
								<h2>После открытия ИП у вас будет:</h2>
								<div class="label_width_question">
									Компания со 100% собственностью и счет в грузинском банке
									<img src="images/icons/blue_question_icon.svg" alt="" />
								</div>
								<div class="label_width_question">
									Доступ к международным платежным системам<img src="images/icons/blue_question_icon.svg" alt="" />
								</div>
								<div class="label_width_question">
									Оплата налогов будет происходить по эстонской системе<img src="images/icons/blue_question_icon.svg" alt="" />
								</div>
								<div class="label_width_question">
									Все финансовые операции можно проводить удаленно<img src="images/icons/blue_question_icon.svg" alt="" />
								</div>
								<div class="label_width_question">
									Данные о вашей компании не передаются в CRS<img src="images/icons/blue_question_icon.svg" alt="" />
								</div>
								<div class="label_width_question">
									Ваша компания не платит двойной налог при работе с 57 странами<img
										src="images/icons/blue_question_icon.svg"
										alt=""
									/>
								</div>
							</div>
							<div class="quiz_slide" id="quiz_form">
								<div class="quiz_stage_title">Выберите удобный способ связи и мы напишем вам в течение 30 минут</div>
								<div class="formfeedback__tabs">
									<div class="formfeedback__tabs-item active" data-context="call" data-btn="1">
										<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M16.5 21.8152C9.05606 21.8152 3 15.7811 3 8.36411C3.00128 7.09161 3.46747 5.8631 4.31147 4.90809C5.15547 3.95307 6.31955 3.33687 7.58625 3.1746C7.90858 3.13586 8.23484 3.20212 8.51624 3.36347C8.79764 3.52482 9.01905 3.7726 9.14737 4.06975L11.031 8.44864C11.1287 8.67516 11.1685 8.92227 11.1469 9.16787C11.1254 9.41348 11.043 9.64992 10.9073 9.85606L9.34772 12.2304L9.34753 12.2305C10.0517 13.6572 11.2131 14.8092 12.648 15.5046L14.9958 13.9452C15.2032 13.8069 15.4421 13.7225 15.6907 13.6998C15.9392 13.677 16.1896 13.7166 16.4188 13.815L20.8099 15.69C21.1081 15.8178 21.3569 16.0384 21.5188 16.3188C21.6808 16.5992 21.7473 16.9243 21.7084 17.2455C21.5455 18.5076 20.9271 19.6675 19.9686 20.5084C19.0101 21.3494 17.7771 21.8139 16.5 21.8152ZM7.76869 4.65861C6.86517 4.77547 6.0352 5.21593 5.43372 5.89779C4.83223 6.57966 4.50034 7.45631 4.5 8.36411C4.5036 11.5341 5.76904 14.5732 8.01869 16.8147C10.2683 19.0562 13.3185 20.317 16.5 20.3206C17.412 20.3199 18.2926 19.9884 18.9772 19.388C19.6619 18.7876 20.1037 17.9595 20.2203 17.0582L15.828 15.1888L13.481 16.7481C13.2652 16.8917 13.0158 16.977 12.757 16.9957C12.4983 17.0143 12.2391 16.9657 12.0049 16.8546C10.2604 16.0124 8.84904 14.6126 7.99575 12.8783C7.88369 12.6462 7.83371 12.3893 7.85066 12.1324C7.86761 11.8755 7.95092 11.6273 8.0925 11.4119L9.65213 9.03741L7.76869 4.65861Z"
												fill="#0B2128"
											></path>
										</svg>
										Звонок
									</div>
									<div class="formfeedback__tabs-item" data-context="email" data-btn="2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M5.25 4H18.75C19.5801 3.99995 20.3788 4.31755 20.9822 4.88767C21.5856 5.45779 21.948 6.23719 21.995 7.066L22 7.25V16.75C22.0001 17.5801 21.6824 18.3788 21.1123 18.9822C20.5422 19.5856 19.7628 19.948 18.934 19.995L18.75 20H5.25C4.41986 20.0001 3.62117 19.6824 3.01777 19.1123C2.41437 18.5422 2.052 17.7628 2.005 16.934L2 16.75V7.25C1.99995 6.41986 2.31755 5.62117 2.88767 5.01777C3.45779 4.41437 4.23719 4.052 5.066 4.005L5.25 4H18.75H5.25ZM20.5 9.373L12.35 13.663C12.258 13.7116 12.1568 13.7405 12.053 13.7479C11.9492 13.7553 11.845 13.7411 11.747 13.706L11.651 13.664L3.5 9.374V16.75C3.50002 17.1892 3.66517 17.6123 3.96268 17.9354C4.26019 18.2585 4.6683 18.4579 5.106 18.494L5.25 18.5H18.75C19.1893 18.5 19.6126 18.3347 19.9357 18.037C20.2588 17.7392 20.4581 17.3309 20.494 16.893L20.5 16.75V9.373ZM18.75 5.5H5.25C4.81081 5.50002 4.38768 5.66517 4.06461 5.96268C3.74154 6.26019 3.54214 6.6683 3.506 7.106L3.5 7.25V7.679L12 12.152L20.5 7.678V7.25C20.5 6.81065 20.3347 6.38739 20.037 6.06429C19.7392 5.74119 19.3309 5.5419 18.893 5.506L18.75 5.5Z"
												fill="#979B9D"
											></path>
										</svg>
										Email
									</div>
									<div class="formfeedback__tabs-item" data-context="whatsapp" data-btn="3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M19.05 4.91006C18.1332 3.98399 17.0412 3.24973 15.8376 2.75011C14.6341 2.25049 13.3431 1.99552 12.04 2.00006C6.57999 2.00006 2.12999 6.45006 2.12999 11.9101C2.12999 13.6601 2.58999 15.3601 3.44999 16.8601L2.04999 22.0001L7.29999 20.6201C8.74999 21.4101 10.38 21.8301 12.04 21.8301C17.5 21.8301 21.95 17.3801 21.95 11.9201C21.95 9.27006 20.92 6.78006 19.05 4.91006V4.91006ZM12.04 20.1501C10.56 20.1501 9.10999 19.7501 7.83999 19.0001L7.53999 18.8201L4.41999 19.6401L5.24999 16.6001L5.04999 16.2901C4.22773 14.977 3.79113 13.4593 3.78999 11.9101C3.78999 7.37006 7.48999 3.67006 12.03 3.67006C14.23 3.67006 16.3 4.53006 17.85 6.09006C18.6175 6.85402 19.2257 7.76272 19.6394 8.76348C20.0531 9.76425 20.264 10.8372 20.26 11.9201C20.28 16.4601 16.58 20.1501 12.04 20.1501V20.1501ZM16.56 13.9901C16.31 13.8701 15.09 13.2701 14.87 13.1801C14.64 13.1001 14.48 13.0601 14.31 13.3001C14.14 13.5501 13.67 14.1101 13.53 14.2701C13.39 14.4401 13.24 14.4601 12.99 14.3301C12.74 14.2101 11.94 13.9401 11 13.1001C10.26 12.4401 9.76999 11.6301 9.61999 11.3801C9.47999 11.1301 9.59999 11.0001 9.72999 10.8701C9.83999 10.7601 9.97999 10.5801 10.1 10.4401C10.22 10.3001 10.27 10.1901 10.35 10.0301C10.43 9.86006 10.39 9.72006 10.33 9.60006C10.27 9.48006 9.76999 8.26006 9.56999 7.76006C9.36999 7.28006 9.15999 7.34006 9.00999 7.33006H8.52999C8.35999 7.33006 8.09999 7.39006 7.86999 7.64006C7.64999 7.89006 7.00999 8.49006 7.00999 9.71006C7.00999 10.9301 7.89999 12.1101 8.01999 12.2701C8.13999 12.4401 9.76999 14.9401 12.25 16.0101C12.84 16.2701 13.3 16.4201 13.66 16.5301C14.25 16.7201 14.79 16.6901 15.22 16.6301C15.7 16.5601 16.69 16.0301 16.89 15.4501C17.1 14.8701 17.1 14.3801 17.03 14.2701C16.96 14.1601 16.81 14.1101 16.56 13.9901V13.9901Z"
												fill="#979B9D"
											></path>
										</svg>
										Whatsapp
									</div>
									<div class="formfeedback__tabs-item" data-context="telegram" data-btn="4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
												d="M21.6803 2.97536C21.4736 2.79693 21.222 2.67843 20.9529 2.63271C20.6837 2.58698 20.4071 2.61577 20.1531 2.71596L2.85087 9.5133C2.54934 9.63181 2.29428 9.84476 2.12385 10.1203C1.95342 10.3958 1.87678 10.7191 1.9054 11.0419C1.93402 11.3646 2.06636 11.6694 2.28262 11.9106C2.49888 12.1518 2.78744 12.3166 3.10512 12.3802L7.50003 13.2594V18.7487C7.49976 19.0455 7.58758 19.3357 7.75235 19.5825C7.91712 19.8294 8.15144 20.0217 8.42563 20.1353C8.69982 20.2489 9.00154 20.2786 9.2926 20.2205C9.58365 20.1625 9.85094 20.0194 10.0606 19.8094L12.4929 17.3772L16.1844 20.6257C16.4561 20.867 16.8069 21.0006 17.1703 21.0011C17.3283 21.0009 17.4853 20.976 17.6356 20.9273C17.8835 20.8486 18.1065 20.7064 18.2823 20.5147C18.458 20.323 18.5805 20.0885 18.6373 19.8347L22.1637 4.44733C22.2251 4.18124 22.2125 3.90342 22.1273 3.64397C22.0421 3.38451 21.8875 3.15333 21.6803 2.97546V2.97536ZM8.07621 11.8448L3.39949 10.9094L16.4946 5.7648L8.07621 11.8448ZM9.00003 18.748V14.3035L11.3644 16.3841L9.00003 18.748ZM17.1752 19.4996L9.45096 12.7021L20.5739 4.66896L17.1752 19.4996Z"
												fill="#979B9D"
											></path>
										</svg>
										Telegram
									</div>
								</div>
								<form class="formfeedback__form active quiz-form" data-content="1">
									<label class="invalid" for="">
										<input type="text" placeholder="Номер телефона" required="" />
									</label>
									<label class="valid" for="">
										<input type="text" placeholder="Ваше имя" required="" />
									</label>
									<div class="formfeedback__form-send">
										<div class="formfeedback__form-send__text">
											Нажимая кнопку «Отправить», вы соглашаетесь с
											<a class="text-hover" href="">обработкой персональных данных</a>
										</div>
										<button type="submit" id="call" class="formfeedback__form-send__btn btn btn-hover">Отправить</button>
									</div>
								</form>
								<form class="formfeedback__form quiz-form" data-content="2">
									<label for="">
										<input type="text" placeholder="Email" required="" />
									</label>
									<label for="">
										<input type="text" placeholder="Ваше имя" required="" />
									</label>
									<div class="formfeedback__form-send">
										<div class="formfeedback__form-send__text">
											Нажимая кнопку «Отправить», вы соглашаетесь с
											<a class="text-hover" href="">обработкой персональных данных</a>
										</div>
										<button type="submit" id="email" class="formfeedback__form-send__btn btn btn-hover">Отправить</button>
									</div>
								</form>
								<form class="formfeedback__form quiz-form" data-content="3">
									<label for="">
										<input type="text" placeholder="Whatsapp" required="" />
									</label>
									<label for="">
										<input type="text" placeholder="Ваше имя" required="" />
									</label>
									<div class="formfeedback__form-send">
										<div class="formfeedback__form-send__text">
											Нажимая кнопку «Отправить», вы соглашаетесь с
											<a class="text-hover" href="">обработкой персональных данных</a>
										</div>
										<button type="submit" id="whatsapp" class="formfeedback__form-send__btn btn btn-hover">Отправить</button>
									</div>
								</form>
								<form class="formfeedback__form quiz-form" data-content="4">
									<label for="">
										<input type="text" placeholder="Telegram" required="" />
									</label>
									<label for="">
										<input type="text" placeholder="Ваше имя" required="" />
									</label>
									<div class="formfeedback__form-send">
										<div class="formfeedback__form-send__text">
											Нажимая кнопку «Отправить», вы соглашаетесь с
											<a class="text-hover" href="">обработкой персональных данных</a>
										</div>
										<button type="submit" id="telegram" class="formfeedback__form-send__btn btn btn-hover">Отправить</button>
									</div>
								</form>
							</div>
						</div>
						<div class="quiz_buttons_container">
							<button class="prev_step_quiz"><img src="images/icons/arrow-prev.svg" alt="←" /> Предыдущий шаг</button>
							<button class="next_step_quiz inactive_quiz_button">
								Следующий шаг <img src="images/icons/arrow-next.svg" alt="→" />
							</button>
						</div>
					</div>
					<div class="quiz_right">
						<div class="quiz_desktop_price">
							<p>Стоимость открытия бизнеса:</p>
							<div class="quiz_price" id="desktop_price">
								<div id="desktop_quiz_input" class="quiz_price_value">$0</div>
							</div>
						</div>
						<div class="prizes">
							<div class="desktop_prizes_quiz_title">После прохождения вы получите:</div>
							<div class="prizes_previews">
								<div class="prize_container">Чек-лист документов <img src="images/icons/prize-icon.svg" alt="" /></div>
								<div class="prize_container">
									Аналитику эконом. ситуации в Грузии <img src="images/icons/prize-icon.svg" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <?php include 'templates/business-cases.php' ?>

    <?php include 'templates/reviews.php' ?>

    <?php include 'templates/after-opening-business.php' ?>

    <section class="help default_block">
    	<div class="container">
    		<div class="help__title">Помощь</div>
    		<div class="help__wrapper">
    			<div class="help__item-wrapper">
    				<div class="help__item-title">Какой бизнес я могу открыть в Грузии?</div>
    				<p class="help__item-text" style="max-height: 0px">
    					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum perferendis nihil, eum nemo porro neque at dicta non rerum, incidunt
    					doloremque odio vitae nisi vel! Suscipit, explicabo ut? Possimus, unde.
    				</p>
    			</div>
    			<div class="help__item-wrapper">
    				<div class="help__item-title">Могу ли я открыть бизнес удаленно?</div>
    				<p class="help__item-text" style="max-height: 0px">
    					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum perferendis nihil, eum nemo porro neque at dicta non rerum, incidunt
    					doloremque odio vitae nisi vel! Suscipit, explicabo ut? Possimus, unde.
    				</p>
    			</div>
    			<div class="help__item-wrapper">
    				<div class="help__item-title">Какие формы предпринимательской деятельности существуют в Грузии?</div>
    				<p class="help__item-text" style="max-height: 0px">
    					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum perferendis nihil, eum nemo porro neque at dicta non rerum, incidunt
    					doloremque odio vitae nisi vel! Suscipit, explicabo ut? Possimus, unde.
    				</p>
    			</div>
    			<div class="help__item-wrapper">
    				<div class="help__item-title">Может ли гражданин другой страны зарегистрировать компанию?</div>
    				<p class="help__item-text" style="max-height: 0px">
    					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum perferendis nihil, eum nemo porro neque at dicta non rerum, incidunt
    					doloremque odio vitae nisi vel! Suscipit, explicabo ut? Possimus, unde.
    				</p>
    			</div>
    			<div class="help__item-wrapper">
    				<div class="help__item-title">Как быстро проходит регистрация компании в Грузии?</div>
    				<p class="help__item-text" style="max-height: 0px">
    					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum perferendis nihil, eum nemo porro neque at dicta non rerum, incidunt
    					doloremque odio vitae nisi vel! Suscipit, explicabo ut? Possimus, unde.
    				</p>
    			</div>
    		</div>
    	</div>
    </section>





<?php $scripts = array('js/quiz.js', 'js/help.js'); include 'templates/footer.php'; ?>

<div class="overlay">
	<div class="popup">
		<div class="block_title">Виды правовых форм</div>
		<p>Нажмите и выберите интересующую вас форму, чтобы отразить более подробную информацию</p>
		<div class="popup_tabs_container">
			<p class="popup_tab">Индивидуальный предприниматель</p>
			<p class="popup_tab">Общество с ограниченной ответственностью</p>
			<p class="popup_tab">ООО со статусом виртуальной зоны</p>
			<p class="popup_tab">Некоммерческая организация (НКО)</p>
			<p class="popup_tab">Акционерное общество (АО)</p>
		</div>
		<div class="popup_text_container">
			<div class="popup_text_block">
				<h1>Индивидуальный предприниматель (ИП)</h1>
				<p>
					Чтобы стать индивидуальным предпринимателем не нужен уставной капитал, совсем не обязательно нанимать сотрудников. Стать может как
					резидент так и нерезидент Грузии. Все действия по регистрации можно провести удаленно по доверенности.
				</p>
			</div>
			<div class="popup_text_block">
				<h2>Формы и налоги ИП</h2>
				<p>Всего есть 2 формы индивидуального предпринимательства. Обычный ИП и ИП с малым статусом, у них разная налоговая нагрузка:</p>
				<p>Обычный ИП платит 20% налогов с прибыли ежегодно. Для данной формы ИП нет ограничений по ежегодным оборотам.</p>
				<p>
					ИП с малым статусом платит 1% с выручки, то есть с прибыли до вычета расходов. Ежегодный оборот малого предпринимателя не должен
					превышать 500 000 лари, при совокупном превышении за два года оборота в 1 миллион лари — статус официально снимается. Статус малого
					бизнеса присваивается налоговой службой.
				</p>
			</div>
			<div class="popup_text_block">
				<h2>Микробизнес</h2>
				<p>
					Еще есть самая простая форма ведения бизнеса — микробизнес. Оборот при этом должен составлять не больше 30 000 лари в год и не
					должно быть наемных сотрудников. В таком случае ваш бизнес будет полностью освобожден от налога на прибыль, но нужно будет
					уплачивать налог за аренду офиса, если такой имеется в размере 5%. Статус микробизнеса в Грузии чаще всего имеют: семейный бизнес,
					частные отели, хостелы, гостевые дома, ремесленники, таксисты, туристические гиды и т.д.
				</p>
			</div>
			<button class="popup_quiz_action_btn">Выбрать форму и перейти дальше</button>
		</div>
		<div class="popup_close"><img src="images/icons/close_popup.svg" alt="" /></div>
	</div>
</div>
