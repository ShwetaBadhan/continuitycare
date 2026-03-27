function formatUrl(url) {
    if (!url) return "";

    const dashboardUrl = "http://127.0.0.1:8000/api/image";

    const parsed = new URL(url);

    return dashboardUrl + parsed.pathname.replace("/storage", "");
}
