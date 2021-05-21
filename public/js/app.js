const App =  Vue.createApp({
    data() {
        return {
            backImg: [
                "images/one.jpg",
                "images/two.png",
            ],
            selectedImg: "images/one.jpg",
            slideMainText: [
                {up: "Тренажёрный зал", down: "850 квадратных метров первоклассного железа."},
                {up: "Кардиозона", down: "Движение – жизнь."}
            ],
            slideMainCurrentText: {up: "Тренажёрный зал", down: "850 квадратных метров первоклассного железа."},
            items: [
                {title: "Стандарт 1 месяц (безлимитный)", desc: "3 300 ₽"},
                {title: "Стандарт 3 месяц (безлимитный)", desc: "7 800 ₽"},
                {title: "Стандарт 6 месяц (безлимитный)", desc: "14 600 ₽"},
                {title: "Стандарт 12 месяц (безлимитный)", desc: "28 800 ₽"},
                {title: "Дневной 1 месяц (безлимитный)", desc: "2 800 ₽"},
                {title: "Дневной 6 месяц (безлимитный)", desc: "12 600 ₽"},
                {title: "1 месяц 8 посещений", desc: "2 300 ₽"},
                {title: "1 месяц 4 посещения", desc: "1 800 ₽"},
                {title: "Разовое посещение клуба от 16 лет", desc: "500 ₽"},
                {title: "Разовое посещение клуба до 14 лет", desc: "500 ₽"},
                {title: "Гостевой визит", desc: "250 ₽"},
                {title: "Посещение Детского клуба", desc: "250 ₽"}
            ],
            services:[
                "Тренажёрный зал",
                "Кардиозона",
                "Functional zone",
                "Зона тяжёлой атлетики",
                "Залы групповых программ",
                "Зал единоборств",
                "Бассейн 25 метров",
                "Сауна",
                "Детский бассейн",
                "Детский клуб",
            ],
            plus:'Что-то'
        }
    },
    computed: {
        computedImg: function () {
            return this.selectedImg;
        }
    },
    methods: {
        NextSlide: function () {
            this.ChangeSlide(1)
        },
        PrevSlide: function () {
            this.ChangeSlide(0)
        },


        ChangeSlide(index) {
            this.selectedImg = this.backImg[index];
            this.slideMainCurrentText.up = this.slideMainText[index].up
            this.slideMainCurrentText.down = this.slideMainText[index].down
        }
    }

})

App.mount('#app')
