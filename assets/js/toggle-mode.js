(function () {
  const userPref = localStorage.getItem("dark-mode");
  const systemPref = window.matchMedia("(prefers-color-scheme: dark)").matches;
  if (userPref === "true" || (userPref === null && systemPref)) {
    document.documentElement.classList.add("dark");
  }
})();

tailwind.config = {
  darkMode: "class",
};
