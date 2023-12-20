<template>
    <button
        type="button"
        className="inline-flex items-center p-2 m-2 ms-3 text-sm rounded-lg sm:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6 text-black"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
            />
        </svg>
    </button>

    <aside
        id="logo-sidebar"
        className="flex flex-col justify-between fixed top-0 left-0 z-40 w-64 h-screen transition-transform sm:transform-none -translate-x-full sm:translate-x-0"
        aria-label="Sidebar"
    >
        <div className="h-full px-3 py-4 overflow-y-auto bg-gray-800">
            <a
                href="https://e-yantra.org/"
                className="flex items-center ps-2.5 mb-5"
            >
                <img
                    src="https://portal.e-yantra.org/img/e-logo-small.svg"
                    className="h-6 me-3 sm:h-7"
                    alt="E-yantra"
                />
                <span
                    className="self-center text-xl font-semibold whitespace-nowrap text-white"
                >
                    E-yantra
                </span>
            </a>
            <hr />
            <ul className="space-y-2 font-medium mt-2">
                <li>
                    <a
                        href="#"
                        className="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                        ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 mx-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                            />
                        </svg>

                        <span className="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        className="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                        ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 mx-4"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                        </svg>

                        <span className="flex-1 ms-3 whitespace-nowrap"
                            >Profile</span
                        >
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        className="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                    >
                        <span className="flex-1 ms-3 whitespace-nowrap"
                            >Inbox</span
                        >
                        <span
                            className="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium rounded-full bg-blue-900 text-blue-300"
                        >
                            3
                        </span>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        className="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                    >
                        <span className="flex-1 ms-3 whitespace-nowrap"
                            >Users</span
                        >
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        className="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group"
                    >
                        <span className="flex-1 ms-3 whitespace-nowrap"
                            >Products</span
                        >
                    </a>
                </li>
            </ul>
        </div>
        <div
            className="flex justify-between items-center w-full px-4 py-7 bottom-2 bg-gray-800"
        >
            <div className="flex justify-center items-center space-x-2">
                <div>
                    <img
                        className="rounded-full"
                        src="https://i.ibb.co/L1LQtBm/Ellipse-1.png"
                        alt="avatar"
                    />
                </div>
                <div className="flex justify-start flex-col items-start">
                    <p className="cursor-pointer text-sm leading-5 text-white">
                        {{ user.name }}
                    </p>
                    <p
                        className="cursor-pointer text-xs leading-3 text-gray-300"
                    >
                        {{ user.email }}
                    </p>
                </div>
            </div>
            <button className="px-4" @click="logout">
                <!-- <GoSignOut /> -->
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    data-slot="icon"
                    class="w-6 h-6 text-white"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15"
                    />
                </svg>
            </button>
        </div>
    </aside>

    <div className="p-4 sm:ml-64">
        <!-- <div className="p-4 border-2 border-dashed rounded-lg border-gray-700">
          {showNav && (
            <div
              className="fixed top-0 left-0 w-full h-full bg-black opacity-50"
              onClick={() => setShowNav(false)} // Close sidebar when clicking the backdrop
            />
          )}
          {children}
        </div> -->
    </div>
</template>
<script setup>
const { user } = defineProps(["user"]);
const logout = () => {
    window.location.href = "/logout";
}
</script>
