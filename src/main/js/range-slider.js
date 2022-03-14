$("#slider_range").slider({
  formatter: function (value) {},
});
let range = $("#slider_range").attr("value");
$("#sum_capital").html(+range);
$("#sum_res").html(Math.round(range * 1.8));
$(document).on("input change", "#slider_range", function () {
  $("#sum_capital").html($(this).val());
  $("#sum_res").html(Math.round($(this).val() * 1.834));
});

{
  /* <div class="calculator__capital">

      <!-- <div class="sum">
        <span>$ </span>
        <span class="sum__num" id="sum_capital">2500</span>
      </div> -->

      <div class="calculator__capital-body">
        <div class="slider">
          <input id="slider_range" class="slider__range" data-slider-id="slider_rangeSlider" type="text"
            data-slider-min="250" data-slider-max="1000" data-slider-step="1" data-slider-value="2500" data-value="2500"
            value="2500" style="display: none;">
          <ul class="slider__point-list">
            <li class="slider__point-item">250$</li>
            <li class="slider__point-item">400$</li>
            <li class="slider__point-item">600$</li>
            <li class="slider__point-item">800$</li>
            <li class="slider__point-item">1000$</li>
          </ul>
        </div>
      </div>

      <div class="calculator__income-body">
        <div class="prediction">
          <div class="prediction__label">Ваша прибыль</div>
          <div class="prediction__sum">

            <span class="sum__num" id="sum_res">350</span>
            <span>$ </span>
          </div>
        </div>

      </div>


    </div> */
}

// .calculator__capital-head .sum {
//   font-weight: 300;
//   font-size: 48px;
//   color: #108dd4;
// }

// .calculator__capital-body .slider {
//   width: 100%;
//   margin-bottom: 5px;
// }

// .calculator__capital-body .slider__range {
//   margin: 18px 0;
//   width: 100%;
// }

// .calculator__capital-body .slider__range:focus {
//   outline: none;
// }

// .calculator__capital-body .slider #slider_rangeSlider .slider-selection {
//   background: linear-gradient(0deg, #5558ff -8.25%, #00c0ff 97.64%);
// }

// .calculator__capital-body .slider #slider_rangeSlider .slider-handle {
//   width: 22px;
//   height: 20px;
//   background: linear-gradient(0deg, #ff5555 0%, #ff0000 100%);
//   //   border: 7px solid linear-gradient(0deg, #ff5555 0%, #ff0000 100%);
// }

// .slider__point-list {
//   display: flex;
//   justify-content: space-between;

//   padding: 0;
//   margin: 0;
//   list-style: none;
// }

// .slider__point-item {
//   font-weight: normal;
//   font-size: 8px;
//   line-height: 1.2;

//   color: #212121;
// }

// .calculator__income-body {
//   padding: 20px;
//   margin-top: 20px;
//   background: linear-gradient(0deg, #5558ff -8.25%, #00c0ff 97.64%);
//   border-radius: 4px;
// }

// .prediction__label {
//   margin-bottom: 4px;
//   font-weight: normal;
//   font-size: 14px;
//   line-height: 1.2;

//   text-align: center;

//   color: #ffffff;
// }

// .prediction__sum {
//   font-weight: bold;
//   font-size: 40px;
//   line-height: 1.2;

//   text-align: center;

//   color: #ffffff;
// }
