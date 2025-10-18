$(function () {
  const cars = {
    small: `
    <!-- First Row -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Honda Accord</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Honda Accord.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Honda Civic</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Honda Civic.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Honda Civic Type R</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Honda Civic Type R.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Honda HR-V</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Honda HR-V.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
      </div>
      <!-- Second Row -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Toyota Camry</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Toyota Camry.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Kia Picanto</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Kia Picanto.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Kia Soluto</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Kia Soluto.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Suzuki Celerio</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Suzuki Celerio.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
      </div>
      <!-- Third Row -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Suzuki S-Presso</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Suzuki S-Presso.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Toyota Corolla Altis</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Toyota Corolla Altis.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Suzuki Swift</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Suzuki Swift.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Kia K4</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Kia K4.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
      </div>
      <!-- Fourth Row -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Toyota Wigo</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Small Cars/Toyota Wigo.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
      </div>
    `,
    medium: `
      <!-- First Row -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Hyundai Accent</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Hyundai Accent.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Hyundai Creta</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Hyundai Creta.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Hyundai Elantra</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Hyundai Elantra.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Hyundai IONIQ 5</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Hyundai IONIQ 5.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
      </div>
      <!-- Second Row -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Hyundai Sonata</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Hyundai Sonata.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Hyundai Veneu</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Hyundai Veneu.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Kia Ev6</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Kia Ev6.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Kia Ev9</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Kia Ev9.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
      </div>
      <!-- Third Row -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Toyota Crow Signia</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Toyota Crow Signia.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Toyota Gazoo</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Toyota Gazoo.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Toyota GR86</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Medium Cars/Toyota GR86.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
      </div>
    `,
    large: `
      <!-- First Row -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Honda CR V</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Large Cars/Honda CR V.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Jeep Compass</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Large Cars/Jeep Compass.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Kia Carnival</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Large Cars/Kia Carnival.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Kia Sedona</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Large Cars/Kia Sedona.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
      </div>
      <!-- Second Row -->
      <div class="d-flex justify-content-center align-items-center gap-4">
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Toyota Raize</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Large Cars/Toyota Raize.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Toyota Seinna</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Large Cars/Toyota Seinna.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Toyota Yaris Cross</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Large Cars/Toyota Yaris Cross.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
        <div class="rounded-4" style="width: 17.813rem; height: 20.313rem; background: #FFF7F3;">
            <div>
                <h3 style="font-size: 1.5rem; margin: 1rem">Volvo V60</h3>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div style="width: 15.938rem; height: 10.5rem;">
                    <img class="object-fit-contain" src="src/assets/images/Blueprint/Large Cars/Volvo V60.png"
                        style="width: 15.938rem; height: 10.5rem">
                </div>
                <div style="width: 15.813rem; height: 2.813rem; background: #F5E9E3;">
                    <div class="d-flex justify-content-evenly align-items-center mt-2">
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gauge" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">52,754 miles</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gas-pump" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Petrol</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <i class="fa-solid fa-gear" style="font-size: 1.25rem; color: #d6a78eff"></i>
                            <p style="font-size: 0.625rem; color: #473d36ff">Automatic</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="font-size: 1.188rem; margin-left: 1.5rem; margin-top: 0.75rem">$450/<span
                        style="font-size: 0.75rem">day</span></h3>
                <button class="rounded-5 border border-none text-white"
                    style="width: 4.938rem; height: 1.688rem; font-size: 0.688rem; margin-right: 1.5rem; margin-top: 0.55rem; background: #D9BBAC">Book
                    Now</button>
            </div>
        </div>
      </div>
    `,
    suvs: `
      <div class="d-flex justify-content-center align-items-center">
        <h2>No SUVs available at the moment.</h2>
      </div>
    `,
    vans: `
      <div class="d-flex justify-content-center align-items-center">
        <h2>No Vans available at the moment.</h2>
      </div>
    `,
  };

  // when a category is clicked
  $(".category").on("click", function () {
    const category = $(this).data("category");

    // change active background
    $(".category").css("background", "#DAC2B7");
    $(this).css("background", "#BFA397");

    // replace car content smoothly
    $("#car-container").fadeOut(200, function () {
      $(this).html(cars[category]).fadeIn(200);
    });
  });
});