
<div id="app" class="container-main">
    <div class="left">
        <div class="toggle-container">
            <div id="group1toggles">
                <ul class="attlist">
                    <h1>Front-End</h1>
                    <li>
                        <label>
                            HTML
                        </label>
                        <input type="range" min="0" max="100" v-model="group1.p1percent" />
                    </li>
                    <li>
                        <label>
                            CSS
                        </label>
                        <input type="range" min="0" max="100" v-model="group1.p2percent" />
                    </li>
                    <li>
                        <label>
                            JS
                        </label>
                        <input type="range" min="0" max="100" v-model="group1.p3percent" />
                    </li>
                    <li>
                        <label>
                            BOOT-STRAP
                        </label>
                        <input type="range" min="0" max="100" v-model="group1.p4percent" />
                    </li>
                    <li>
                        <label>
                            REACT JS
                        </label>
                        <input type="range" min="0" max="100" v-model="group1.p5percent" />
                    </li>
                    <li>
                        <label>
                            NEXT JS
                        </label>
                        <input type="range" min="0" max="100" v-model="group1.p6percent" />
                    </li>
                </ul>
            </div>
            <div id="group2toggles">
                <ul class="attlist">
                    <h1>Back-End</h1>
                    <li>
                        <label>
                            PHP
                        </label>
                        <input type="range" min="0" max="100" v-model="group2.p1percent" />
                    </li>
                    <li>
                        <label>
                            PHP OOP
                        </label>
                        <input type="range" min="0" max="100" v-model="group2.p2percent" />
                    </li>
                    <li>
                        <label>
                            MYSQL
                        </label>
                        <input type="range" min="0" max="100" v-model="group2.p3percent" />
                    </li>
                    <li>
                        <label>
                            MVC
                        </label>
                        <input type="range" min="0" max="100" v-model="group2.p4percent" />
                    </li>
                    <li>
                        <label>
                            DESGIN PATRRN
                        </label>
                        <input type="range" min="0" max="100" v-model="group2.p5percent" />
                    </li>
                    <li>
                        <label>
                            LARAVEL
                        </label>
                        <input type="range" min="0" max="100" v-model="group2.p6percent" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="svg-container">

            <svg id="chart" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 805 768"
                enable-background="new 0 0 805 768" xml:space="preserve">
                <line class="st0" x1="75.6" y1="195.3" x2="402.5" y2="384" />
                <line class="st0" x1="402.5" y1="6.5" x2="402.5" y2="384" />
                <line class="st0" x1="729.4" y1="195.3" x2="402.5" y2="384" />
                <line class="st0" x1="729.4" y1="572.7" x2="402.5" y2="384" />
                <line class="st0" x1="402.5" y1="761.5" x2="402.5" y2="384" />
                <line class="st0" x1="75.6" y1="572.7" x2="402.5" y2="384" />
                <circle class="st0" cx="402.5" cy="384" r="377.5" />
                <circle class="st0" cx="402.5" cy="384" r="90.9" />
                <circle class="st0" cx="402.5" cy="384" r="163.3" />
                <circle class="st0" cx="402.5" cy="384" r="234.7" />
                <circle class="st0" cx="402.5" cy="384" r="306.1" />
                <g>
                    <polygon class="shape1" :points="g1fullEndPath">
                    </polygon>
                </g>
                <circle class="pointvert1" v-for="point in g1points" :cx="point.x" :cy="point.y"
                    r="6" />
                <g>
                    <polygon class="shape2" :points="g2fullEndPath">
                    </polygon>
                </g>
                <circle class="pointvert2" v-for="point in g2points" :cx="point.x" :cy="point.y"
                    r="6" />
            </svg>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
