! function(e) {
    function t(t) {
        for (var a, s, i = t[0], u = t[1], l = t[2], d = 0, p = []; d < i.length; d++) s = i[d], r[s] && p.push(r[s][0]), r[s] = 0;
        for (a in u) Object.prototype.hasOwnProperty.call(u, a) && (e[a] = u[a]);
        for (c && c(t); p.length;) p.shift()();
        return o.push.apply(o, l || []), n()
    }

    function n() {
        for (var e, t = 0; t < o.length; t++) {
            for (var n = o[t], a = !0, i = 1; i < n.length; i++) {
                var u = n[i];
                0 !== r[u] && (a = !1)
            }
            a && (o.splice(t--, 1), e = s(s.s = n[0]))
        }
        return e
    }
    var a = {},
        r = {
            0: 0
        },
        o = [];

    function s(t) {
        if (a[t]) return a[t].exports;
        var n = a[t] = {
            i: t,
            l: !1,
            exports: {}
        };
        return e[t].call(n.exports, n, n.exports, s), n.l = !0, n.exports
    }
    s.m = e, s.c = a, s.d = function(e, t, n) {
        s.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, s.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, s.t = function(e, t) {
        if (1 & t && (e = s(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (s.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var a in e) s.d(n, a, function(t) {
                return e[t]
            }.bind(null, a));
        return n
    }, s.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return s.d(t, "a", t), t
    }, s.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, s.p = "/";
    var i = window.webpackJsonp = window.webpackJsonp || [],
        u = i.push.bind(i);
    i.push = t, i = i.slice();
    for (var l = 0; l < i.length; l++) t(i[l]);
    var c = u;
    o.push([359, 3, 2, 1]), n()
}({
    106: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var s = o(n(1)),
            i = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.redirectTimeout = 0, n.returnURL = u(n.props.state), n
                }
                return r(t, e), t.prototype.render = function() {
                    var e = localStorage.getItem("return_url_text");
                    return this.returnURL && e ? s.createElement("div", {
                        className: "d-flex flex-row"
                    }, s.createElement("a", {
                        role: "button",
                        "aria-label": e,
                        className: "btn-lg btn-block mt-3 btn-url-callback",
                        href: this.returnURL
                    }, e)) : null
                }, t.prototype.componentDidMount = function() {
                    var e = this,
                        t = this.props.company.uiConfig.auto_redirect_after_seconds;
                    t && this.returnURL && (this.redirectTimeout = setTimeout(function() {
                        return window.location.assign(e.returnURL)
                    }, 1e3 * t))
                }, t.prototype.componentWillUnmount = function() {
                    this.redirectTimeout && clearTimeout(this.redirectTimeout)
                }, t
            }(s.Component);

        function u(e) {
            var t;
            switch (e) {
                case "cancel":
                    t = localStorage.getItem("return_url_cancel");
                    break;
                case "success":
                    t = localStorage.getItem("return_url_success");
                    break;
                case "error":
                    t = localStorage.getItem("return_url_error");
                    break;
                case "verification":
                    t = localStorage.getItem("return_url_verification") || localStorage.getItem("return_url_error")
            }
            return t || localStorage.getItem("return_url")
        }
        t.ReturnUrlButton = i, t.returnUrl = u
    },
    147: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__assign || function() {
                return (o = Object.assign || function(e) {
                    for (var t, n = 1, a = arguments.length; n < a; n++)
                        for (var r in t = arguments[n]) Object.prototype.hasOwnProperty.call(t, r) && (e[r] = t[r]);
                    return e
                }).apply(this, arguments)
            },
            s = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            i = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var u = s(n(39)),
            l = n(614),
            c = i(n(1)),
            d = n(66),
            p = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.fieldType = n.getFieldType(), n.fieldPattern = n.getFieldPattern(), n.fieldStep = n.getFieldStep(), n.state = {
                        feedback: [],
                        invalid: !1,
                        valid: null,
                        value: n.props.defaultValue,
                        warningFeedback: []
                    }, n
                }
                return r(t, e), t.prototype.render = function() {
                    var e = this,
                        t = {
                            pattern: this.fieldPattern,
                            step: this.fieldStep
                        },
                        n = this.isOnlyDigitsField() ? t : {};
                    return c.createElement(d.FormGroup, {
                        className: this.getFormGroupClassName()
                    }, this.showIcon(), c.createElement(d.Input, o({
                        type: this.fieldType,
                        value: this.state.value,
                        placeholder: this.getFieldPlaceholder(),
                        onChange: function(t) {
                            return e.onChange(e.getEventValidity(t), t.target.value)
                        },
                        onInput: function(t) {
                            return e.onChange(e.getEventValidity(t), t.target.value)
                        },
                        onKeyUp: function(t) {
                            return e.onKeyPressed(t)
                        },
                        className: this.getFieldClassName()
                    }, n, {
                        disabled: this.props.disabled,
                        invalid: this.state.invalid,
                        valid: this.state.valid,
                        maxLength: this.getFieldMaxLength(),
                        "data-lpignore": "true",
                        autoComplete: ""
                    })), this.showFeedback(), this.showWarningFeedback(), this.props.children)
                }, t.prototype.getEventValidity = function(e) {
                    return !e.target || !e.target.validity || e.target.validity.valid
                }, t.prototype.getFieldValidations = function() {
                    return this.props.field.validations || []
                }, t.prototype.getFieldType = function() {
                    var e = this.props.field.type.toLowerCase();
                    return this.isOnlyDigitsField() && (e = "number"), e
                }, t.prototype.getFieldStep = function() {
                    if (this.isOnlyDigitsField()) return "any"
                }, t.prototype.getFieldPattern = function() {
                    if (this.isOnlyDigitsField()) return "\\d*"
                }, t.prototype.getFieldPlaceholder = function() {
                    var e = this.props.field;
                    return e.placeholder ? e.placeholder : u.default.t("placeholders." + e.name)
                }, t.prototype.getFormGroupClassName = function() {
                    var e = [];
                    if (this.props.className && e.push(this.props.className), this.props.iconClassName && e.push("input-with-icon"), e.length) return e.join(" ")
                }, t.prototype.getFieldClassName = function() {
                    var e = [];
                    if (this.isNumericPasswordField() && e.push("password-mask"), this.state.warningFeedback.length && e.push("warning"), this.props.allowValueRecording && e.push("data-hj-whitelist"), e.length) return e.join(" ")
                }, t.prototype.getFieldMaxLength = function() {
                    var e = this.getFieldValidations().find(function(e) {
                        return ["exact_length", "max_length"].includes(e.type)
                    });
                    if (e) return e.length
                }, t.prototype.isOnlyDigitsField = function() {
                    return !!this.getFieldValidations().find(function(e) {
                        return "only_digits" === e.type
                    })
                }, t.prototype.isNumericPasswordField = function() {
                    return this.isOnlyDigitsField() && "password" === this.props.field.type.toLowerCase()
                }, t.prototype.onKeyPressed = function(e) {
                    this.props.onHitEnter && "Enter" === e.key && this.props.onHitEnter()
                }, t.prototype.onChange = function(e, t) {
                    var n = this,
                        a = [],
                        r = [];
                    t = t.trim();
                    var o = this.getFieldMaxLength();
                    o && (t = t.slice(0, o)), this.getFieldValidations().forEach(function(o) {
                        if ("only_digits" === o.type && (e && !/\D/.test(t) || a.push(u.default.t("validations.feedback.only_digits"))), "min_length" === o.type && t.length < o.length) {
                            var s = n.isOnlyDigitsField() ? "min_length_digits" : "min_length";
                            a.push(u.default.t("validations.feedback." + s, {
                                length: o.length
                            }))
                        }
                        if ("exact_length" === o.type && t.length !== o.length) {
                            s = n.isOnlyDigitsField() ? "exact_length_digits" : "exact_length";
                            a.push(u.default.t("validations.feedback." + s, {
                                length: o.length
                            }))
                        }
                        "TKCN_number" === o.type && (11 !== t.length || function(e) {
                            return e = (e || "").toString(), /^[0-9]{11}$/.test(e) && function(e) {
                                for (var t = 0, n = 0; n < 10; n++) t += Number(e.substr(n, 1));
                                return t % 10 === Number(e.substr(10, 1))
                            }(e) && function(e) {
                                for (var t = 0, n = 0, a = 0; a < 10; a += 2) t += Number(e.substr(a, 1)), n += Number(e.substr(a + 1, 1));
                                return (7 * t - n) % 10 === Number(e.substr(9, 0))
                            }(e)
                        }(t) || r.push(u.default.t("validations.feedback.TKCN_number"))), "norwegian_birth_number" === o.type && (11 !== t.length || l.validateNorwegianIdNumber(t) || r.push(u.default.t("validations.feedback.norwegian_birth_number")))
                    }), e = 0 === a.length;
                    var s = r.length > 0;
                    this.updateState({
                        feedback: a,
                        invalid: !e,
                        valid: e && !s,
                        value: t,
                        warningFeedback: r
                    }).then(function() {
                        e ? n.props.onChange(t) : n.props.onInvalid()
                    })
                }, t.prototype.showIcon = function() {
                    if (this.props.iconClassName) return c.createElement("i", {
                        className: "fas " + this.props.iconClassName + " input-icon",
                        "aria-hidden": "true"
                    })
                }, t.prototype.showFeedback = function() {
                    return this.state.feedback.map(function(e, t) {
                        return c.createElement(d.FormFeedback, {
                            key: "feedback_" + t
                        }, e)
                    })
                }, t.prototype.showWarningFeedback = function() {
                    return this.state.warningFeedback.map(function(e, t) {
                        return c.createElement("div", {
                            className: "warning-feedback",
                            key: "warning_feedback_" + t
                        }, e)
                    })
                }, t.defaultProps = {
                    allowValueRecording: !1,
                    className: "",
                    defaultValue: "",
                    disabled: !1
                }, t
            }(n(57).BaseComponent);
        t.InputField = p
    },
    336: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var s = o(n(1)),
            i = n(57),
            u = n(147),
            l = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.field = {
                        name: "FILTER_AMOUNT",
                        type: "text",
                        validations: [{
                            type: "only_digits"
                        }]
                    }, n.state = {
                        banks: [],
                        filter: n.getInitialFilter(),
                        nearestAmountPerBank: {}
                    }, n
                }
                return r(t, e), t.prototype.render = function() {
                    var e = this;
                    return s.createElement(u.InputField, {
                        onChange: function(t) {
                            return e.filterAmounts(t)
                        },
                        defaultValue: this.getInitialFilter(),
                        allowValueRecording: !0,
                        className: "amounts-filter",
                        iconClassName: "fa-search-dollar",
                        onInvalid: function() {
                            return null
                        },
                        onHitEnter: function() {
                            return e.props.onHitEnter && e.props.onHitEnter()
                        },
                        field: this.field
                    })
                }, t.prototype.componentDidMount = function() {
                    this.state.filter && this.filterAmounts(this.state.filter)
                }, t.prototype.filterAmounts = function(e) {
                    var t = this,
                        n = {},
                        a = this.props.banks.map(function(a) {
                            n[a.code] = null;
                            var r = Object.assign({}, a);
                            return e && a.amounts.length > 0 && (r.amounts = t.contextFilterAmounts(e, a.amounts), n[a.code] = String(r.amounts[0])), r
                        });
                    this.updateState({
                        banks: a,
                        filter: e,
                        nearestAmountPerBank: n
                    }).then(function() {
                        return t.props.onFilter(t.state.banks, t.state.nearestAmountPerBank, t.state.filter)
                    })
                }, t.prototype.contextFilterAmounts = function(e, t) {
                    t = this.sortAmounts(t);
                    var n = parseInt(e, 10),
                        a = t.findIndex(function(e) {
                            return e >= n
                        });
                    return t.slice(a)
                }, t.prototype.getInitialFilter = function() {
                    return this.props.initialFilter ? String(parseInt(this.props.initialFilter, 10)) : ""
                }, t
            }(i.BaseComponent);
        t.AmountsFilter = l
    },
    337: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), n(616), n(617);
        var i = o(n(116)),
            u = s(n(1)),
            l = function(e) {
                function t() {
                    return null !== e && e.apply(this, arguments) || this
                }
                return r(t, e), t.prototype.render = function() {
                    var e = this;
                    return u.createElement("select", {
                        className: "selectpicker",
                        ref: function(t) {
                            return e.el = t
                        },
                        defaultValue: this.props.defaultValue
                    }, this.props.children)
                }, t.prototype.componentDidMount = function() {
                    this.$el = i.default(this.el), this.$el.selectpicker({
                        mobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)
                    }), this.handleChange = this.handleChange.bind(this), this.$el.on("change", this.handleChange)
                }, t.prototype.componentWillUnmount = function() {
                    this.$el.off("change", this.handleChange), this.$el.selectpicker("destroy")
                }, t.prototype.componentDidUpdate = function() {
                    void 0 !== this.props.value && this.$el.val(this.props.value), this.$el.selectpicker("refresh")
                }, t.prototype.handleChange = function(e) {
                    this.props.onChange(e.target.value)
                }, t
            }(u.Component);
        t.default = l
    },
    338: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var i = o(n(39)),
            u = s(n(1)),
            l = n(66),
            c = n(57),
            d = n(339),
            p = n(340),
            m = n(106),
            f = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this,
                        a = t.status;
                    return n.state = {
                        isCleared: !1,
                        isClearing: "awaiting_payment_request_clearing" === a,
                        isError: "error" === a || "verification" === a,
                        isProcessing: "created" === a || "in_process" === a,
                        isSuccess: "success" === a,
                        showReturnLink: !1
                    }, n
                }
                return r(t, e), t.prototype.render = function() {
                    var e = this;
                    return this.state.isCleared ? u.createElement("div", {
                        className: "card shadow-card card-bankinfo mx-auto mb-3"
                    }, this.showCardHeader(), u.createElement("div", {
                        className: "card-body d-flex flex-column clearing-status"
                    }, u.createElement("p", {
                        className: "card-subtext-sm mt-2 mx-0 mb-0 info"
                    }, i.default.t("message.process_cleared_info")), u.createElement("div", {
                        className: "d-flex flex-row"
                    }, this.showResumeClearingButton()))) : this.state.isClearing ? u.createElement("div", {
                        className: "card shadow-card card-bankinfo mx-auto mb-3"
                    }, this.showCardHeader(), u.createElement("div", {
                        className: "card-body d-flex flex-column clearing-status"
                    }, this.showErrorReason(), u.createElement("div", {
                        className: "mt-3"
                    }, u.createElement(d.Countdown, {
                        date: Date.now() + 1e3 * this.props.reasonMessageParameters.return_remaining_time,
                        showHours: !0,
                        templateKey: "message.hours_countdown",
                        onEnd: function() {
                            return e.clearingEnded()
                        }
                    })), u.createElement("p", {
                        className: "card-subtext-sm mt-2 mx-0 mb-0 info"
                    }, i.default.t("message.process_clearing_info")), u.createElement("div", {
                        className: "d-flex flex-row"
                    }, this.showReturnLinkButton()))) : u.createElement("div", {
                        className: "card shadow-card card-bankinfo mx-auto mb-3"
                    }, c.isNumber(this.props.progress) && u.createElement(p.ProgressBar, {
                        progress: this.props.progress
                    }), this.showCardHeader(), u.createElement("div", {
                        className: "card-body d-flex flex-column"
                    }, u.createElement("div", {
                        className: this.finalClassName("processing-status-container", null, "fade-out")
                    }, u.createElement("div", {
                        className: this.finalClassName("sliding-canvas", "slide-away")
                    }, u.createElement("p", {
                        className: this.finalClassName("processing-amount mb-0", "fade-out")
                    }, this.formatAmount(this.props.amount, this.props.currency)), u.createElement("p", {
                        className: this.finalClassName("card-subtext-sm mb-3", "processing-done")
                    }, i.default.t("message.processing")), u.createElement("p", {
                        className: this.finalClassName("processing-successful card-subtext-sm mb-3", "processing-done")
                    }, this.showExplanationText()))), u.createElement("p", {
                        className: this.finalClassName("card-subtext-sm blue-subtext mt-2 mx-0 mb-0", "fade-out")
                    }, i.default.t("message.process_duration_info")), this.showErrorReason(), u.createElement("div", {
                        className: "d-flex flex-row"
                    }, this.showCancelButton(), this.showRetryButton()), this.state.isSuccess && u.createElement(m.ReturnUrlButton, {
                        state: this.props.status,
                        company: this.props.company
                    })))
                }, t.prototype.finalClassName = function(e, t, n, a) {
                    void 0 === n && (n = null), void 0 === a && (a = null), n = n || t, a = a || n;
                    var r = "";
                    return this.state.isSuccess ? r = t : this.state.isError ? r = n : this.state.isClearing && (r = a), r ? e + " " + r : e
                }, t.prototype.isErrorFinal = function() {
                    return !this.props.retryable
                }, t.prototype.showRetryButton = function() {
                    var e = this;
                    return this.state.isError && this.props.retryAction && !this.isErrorFinal() ? u.createElement(l.Button, {
                        type: "submit",
                        color: "primary",
                        "aria-label": i.default.t("button.try_again"),
                        className: "btn-lg btn-block mt-3 btn-retry",
                        onClick: function() {
                            return e.props.retryAction()
                        }
                    }, i.default.t("button.try_again")) : null
                }, t.prototype.showCancelButton = function() {
                    var e = this;
                    return this.state.isError && this.props.cancelAction && !this.isErrorFinal() ? u.createElement(l.Button, {
                        type: "submit",
                        color: "secondary",
                        "aria-label": i.default.t("button.cancel"),
                        className: "btn-lg btn-block mt-3 btn-cancel",
                        onClick: function() {
                            return e.props.cancelAction()
                        }
                    }, i.default.t("button.cancel")) : null
                }, t.prototype.showErrorReason = function() {
                    if (!this.state.isError && !this.state.isClearing || !this.props.reasonCode) return null;
                    var e = "reasons." + this.props.reasonCode,
                        t = i.default.t(e, this.props.reasonMessageParameters || {});
                    return e === t && "cimode" !== i.default.language ? null : u.createElement("p", {
                        className: this.finalClassName("processing-error-reason card-subtext-sm mb-0", null, "text-danger processing-done fade-in", "processing-done fade-in")
                    }, t)
                }, t.prototype.showResumeClearingButton = function() {
                    return this.props.reasonMessageParameters.return_link ? u.createElement("a", {
                        role: "button",
                        "aria-label": i.default.t("button.complete"),
                        className: "btn-lg mt-3 btn btn-primary btn-block btn-complete",
                        href: this.props.reasonMessageParameters.return_link
                    }, i.default.t("button.complete")) : null
                }, t.prototype.showReturnLinkButton = function() {
                    var e = this;
                    return this.props.reasonMessageParameters.return_link ? this.state.showReturnLink ? u.createElement("p", {
                        className: "card-subtext-sm blue-subtext mt-4 mb-0 mx-auto return-link"
                    }, this.props.reasonMessageParameters.return_link) : u.createElement(l.Button, {
                        type: "submit",
                        color: "secondary",
                        "aria-label": i.default.t("button.show_link"),
                        className: "btn-lg btn-block mt-3 btn-show-link",
                        onClick: function() {
                            return e.showReturnLink()
                        }
                    }, i.default.t("button.show_link")) : null
                }, t.prototype.showReturnLink = function() {
                    this.updateState({
                        showReturnLink: !0
                    })
                }, t.prototype.showExplanationText = function() {
                    return this.state.isSuccess ? i.default.t("message.process_success") : this.state.isError && !this.isErrorFinal() ? i.default.t("message.process_error") : void 0
                }, t.prototype.showCardHeader = function() {
                    return u.createElement("div", {
                        className: "card-header"
                    }, u.createElement("div", {
                        className: this.finalClassName("circle-loader", "load-complete", "load-complete-error", "load-complete-warning")
                    }, u.createElement("div", {
                        className: this.finalClassName("draw", "checkmark", "error-x", "hourglass")
                    })))
                }, t.prototype.clearingEnded = function() {
                    this.updateState({
                        isCleared: !0
                    })
                }, t.defaultProps = {
                    reasonMessageParameters: {}
                }, t
            }(c.BaseComponent);
        t.StatusCard = f
    },
    339: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            },
            s = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var i = o(n(1)),
            u = s(n(39)),
            l = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.updateInterval = 0, n.state = {
                        hours: null,
                        minutes: null,
                        seconds: null
                    }, n
                }
                return r(t, e), t.prototype.render = function() {
                    var e = this.props.templateKey || "message.remaining_time";
                    return this.state.minutes && i.createElement("p", {
                        className: "text-center mt-3 card-subtext-sm mb-5 countdown " + this.attentionClass()
                    }, u.default.t(e, {
                        hours: this.state.hours,
                        minutes: this.state.minutes,
                        seconds: this.state.seconds
                    }))
                }, t.prototype.componentDidMount = function() {
                    var e = this;
                    this.stopCountdown(), this.updateInterval = setInterval(function() {
                        return e.updateCountdown()
                    }, 1e3), this.updateCountdown()
                }, t.prototype.componentWillUnmount = function() {
                    this.stopCountdown()
                }, t.prototype.isCounting = function() {
                    return !!this.updateInterval
                }, t.prototype.stopCountdown = function() {
                    this.updateInterval && (clearInterval(this.updateInterval), this.updateInterval = 0)
                }, t.prototype.updateCountdown = function() {
                    var e = this,
                        t = Math.ceil((this.props.date - Date.now()) / 1e3),
                        n = "00",
                        a = "00",
                        r = "00";
                    if (t > 0) {
                        if (this.props.showHours) {
                            var o = t / 60;
                            r = this.formatTimeNumber(o / 60), n = this.formatTimeNumber(o % 60)
                        } else n = this.formatTimeNumber(t / 60);
                        a = this.formatTimeNumber(t % 60)
                    } else this.stopCountdown();
                    this.setState({
                        hours: r,
                        minutes: n,
                        seconds: a
                    }, function() {
                        !e.isCounting() && e.props.onEnd && e.props.onEnd()
                    })
                }, t.prototype.formatTimeNumber = function(e) {
                    var t = (e = Math.floor(e)).toFixed(0);
                    return e < 10 ? "0" + t : t
                }, t.prototype.attentionClass = function() {
                    if ("00" === this.state.minutes && parseInt(this.state.seconds, 10) <= 20) return "text-danger"
                }, t
            }(i.Component);
        t.Countdown = l
    },
    340: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var s = o(n(1));
        n(622);
        var i = function(e) {
            function t(t) {
                return e.call(this, t) || this
            }
            return r(t, e), t.prototype.render = function() {
                var e = {
                    width: String(this.props.progress) + "%"
                };
                return s.createElement("div", {
                    className: "progress"
                }, s.createElement("div", {
                    className: "progress-bar progress-bar-striped bg-info",
                    role: "progressbar",
                    style: e
                }, this.props.progress, "%"))
            }, t
        }(s.Component);
        t.ProgressBar = i
    },
    341: function(e, t, n) {
        "use strict";
        var a = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            },
            r = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var o = a(n(641)),
            s = n(642),
            i = r(n(39)),
            u = r(n(626)),
            l = "en";
        t.getCurrentLanguage = function() {
            var e = i.default.language.split("-")[0];
            return i.default.hasResourceBundle(e, "translation") ? e : l
        }, t.i18nInit = function() {
            i.default.use(u.default).init({
                detection: {
                    excludeCacheFor: ["cimode"],
                    lookupLocalStorage: "language",
                    order: ["localStorage", "navigator"]
                },
                fallbackLng: l,
                interpolation: {
                    escapeValue: !1
                },
                resources: {
                    en: {
                        translation: n(636)
                    }
                }
            })
        }, t.ADDITIONAL_AVAILABLE_LANGUAGES = {
            no: n(637),
            pt: n(638),
            tr: n(639)
        }, t.sentryInit = function() {
            o.init({
                dsn: "",
                integrations: [new s.Integrations.BrowserTracing],
                tracesSampleRate: 0
            })
        }
    },
    359: function(e, t, n) {
        n(360), e.exports = n(640)
    },
    360: function(e, t, n) {
        "use strict";
        var a = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            r = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var o = a(n(151));
        n(377), n(378), n(379), n(382), n(160), n(593);
        var s = r(n(1)),
            i = r(n(51)),
            u = n(351),
            l = a(n(603)),
            c = n(341),
            d = ["language", "token", "return_url", "return_url_success", "return_url_error", "return_url_cancel", "return_url_verification", "return_url_text"],
            p = window.location.hash.replace("#", "").split("&");
        p.find(function(e) {
            return 0 === e.indexOf("token=")
        }) && ["return_url", "return_url_success", "return_url_error", "return_url_verification", "return_url_text", "return_url_cancel"].forEach(function(e) {
            return localStorage.removeItem(e)
        }), p.forEach(function(e) {
            var t = e.split("=");
            d.indexOf(t[0]) >= 0 && localStorage.setItem(t[0], decodeURIComponent(t[1]))
        }), window.history && window.history.pushState ? window.history.pushState(null, null, window.location.href.split("#")[0]) : window.location.hash = "", c.i18nInit(), o.default.defaults.baseURL = "", o.default.defaults.headers.common.token = localStorage.getItem("token"), document.addEventListener("DOMContentLoaded", function() {
            c.sentryInit(), i.render(s.createElement(u.BrowserRouter, null, s.createElement(l.default, null)), document.getElementById("app"))
        })
    },
    57: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var i = o(n(151)),
            u = o(n(39)),
            l = o(n(8)),
            c = s(n(1)),
            d = n(66),
            p = {
                AUD: "$",
                BRL: "R$",
                INR: "₹",
                NOK: "kr",
                TRY: "₺"
            },
            m = function(e) {
                function t(t) {
                    return e.call(this, t) || this
                }
                return r(t, e), t.prototype.updateState = function(e) {
                    var t = this;
                    return new Promise(function(n, a) {
                        t.setState(Object.assign({}, t.state, e), n)
                    })
                }, t.prototype.formatAmount = function(e, t) {
                    return (p[t] || "") + Number(e).toFixed(2).replace(/\.00/, "")
                }, t.prototype.sortAmounts = function(e, t) {
                    void 0 === t && (t = !1);
                    var n = t ? -1 : 1;
                    return e.sort(function(e, t) {
                        return (Number(e) > Number(t) ? 1 : -1) * n
                    })
                }, t.prototype.changeLanguage = function(e) {
                    var t = this;
                    l.default.locale(e), u.default.changeLanguage(e).then(function() {
                        return t.updateState({})
                    }).then(function() {
                        return localStorage.setItem("language", e)
                    })
                }, t.prototype.bankCodeToTranslationKey = function(e) {
                    return e.substr(0, 8)
                }, t.prototype.loadCollectionDetails = function() {
                    var e = {
                        version: "20221227090246014"
                    };
                    return this.getDataFromAPI("", e)
                }, t.prototype.loadBanksAndAmounts = function() {
                    return this.getDataFromAPI("/collections/available_banks_and_amounts")
                }, t.prototype.selectBankAndAmount = function(e, t) {
                    var n = {
                        amount: t,
                        bank_code: e
                    };
                    return this.postDataToAPI("/collections/select_bank_and_amount", n)
                }, t.prototype.loadRequiredInformationForPayment = function(e) {
                    return this.getDataFromAPI("/transfers/required_information_for_payment", {
                        transfer_id: e
                    })
                }, t.prototype.postPaymentRequiredInformation = function(e) {
                    return this.postDataToAPI("/transfers/information_for_payment", e)
                }, t.prototype.postPaymentQuestionAnswer = function(e, t, n) {
                    return this.postDataToAPI("/payments/" + e + "/answer/" + t, {
                        answer: n
                    })
                }, t.prototype.getPaymentUserEvents = function(e, t) {
                    return this.getDataFromAPI("/payments/" + e + "/user_events", {
                        timestamp: t
                    })
                }, t.prototype.unlinkTransfer = function(e, t) {
                    return this.postDataToAPI("/transfers/unlink_transfer", {
                        transfer_id: e,
                        trigger: t
                    })
                }, t.prototype.cancelPayment = function(e, t) {
                    return this.postDataToAPI("/payments/" + e + "/cancel", {
                        trigger: t
                    })
                }, t.prototype.postDataToAPI = function(e, t) {
                    var n = this;
                    return new Promise(function(a, r) {
                        n.updateState({
                            isLoading: !0
                        }).then(function() {
                            i.default.post(e, t).then(function(e) {
                                n.updateState({
                                    errors: e.data.errors
                                }).then(function() {
                                    return a(e.data)
                                })
                            }).catch(function(e) {
                                return n.updateState({
                                    errors: n.extractResponseErrors(e),
                                    isLoading: !1
                                }).then(r)
                            })
                        })
                    })
                }, t.prototype.getDataFromAPI = function(e, t) {
                    var n = this;
                    return new Promise(function(a, r) {
                        n.updateState({
                            isLoading: !0
                        }).then(function() {
                            i.default.get(e, {
                                params: t
                            }).then(function(e) {
                                n.updateState({
                                    errors: e.data.errors
                                }).then(function() {
                                    return a(e.data)
                                })
                            }).catch(function(e) {
                                return n.updateState({
                                    errors: n.extractResponseErrors(e),
                                    isLoading: !1
                                }).then(r)
                            })
                        })
                    })
                }, t.prototype.extractResponseErrors = function(e) {
                    return e && e.response && e.response.data && e.response.data.errors ? e.response.data.errors : {
                        unknown_error: [u.default.t("message.unknown_error")]
                    }
                }, t
            }(c.Component);
        t.BaseComponent = m, t.extractReasonMessageParameters = function(e) {
            return Object.keys(e).filter(function(e) {
                return !["payment_id", "reason", "retryable", "status", "kind"].includes(e)
            }).map(function(t) {
                var n;
                return (n = {})[t] = e[t], n
            }).reduce(function(e, t) {
                return Object.assign(e, t)
            }, {})
        }, t.isNumber = function(e) {
            return /^\d+$/.test(String(e))
        }, t.showComboBox = function(e, t, n, a, r, o, s) {
            return void 0 === a && (a = ""), void 0 === r && (r = !1), void 0 === o && (o = "primary"), void 0 === s && (s = null), c.createElement(d.UncontrolledDropdown, {
                key: s,
                className: a
            }, c.createElement(d.DropdownToggle, {
                caret: !0,
                color: o,
                disabled: r
            }, e), c.createElement(d.DropdownMenu, null, t.map(function(e) {
                return function(e, t) {
                    return c.createElement(d.DropdownItem, {
                        color: "primary",
                        key: e.value,
                        onClick: function() {
                            return t(e.value)
                        }
                    }, e.label)
                }(e, n)
            })))
        }, t.convertToUIStatus = function(e) {
            return e.match(/SUCCESS/i) ? "success" : e.match(/awaiting_payment_request_clearing/i) ? "awaiting_payment_request_clearing" : "error"
        }
    },
    603: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        }), n(160);
        var i = o(n(39)),
            u = s(n(1)),
            l = n(351),
            c = n(604),
            d = n(615),
            p = n(57),
            m = n(618),
            f = n(619),
            h = n(620),
            _ = n(621),
            g = n(106),
            b = o(n(337)),
            y = n(338),
            E = n(623),
            k = n(625),
            v = n(341),
            O = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.state = {
                        amountsFilter: "",
                        banks: [],
                        collection: {
                            currency: null,
                            status: null,
                            suggestedAmount: null,
                            suggestedBankCode: null
                        },
                        company: {
                            id: null,
                            name: null,
                            uiConfig: {}
                        },
                        errors: null,
                        isLoading: !0,
                        lastPayment: null,
                        message: null,
                        payment: {
                            id: null,
                            reason: null,
                            reasonMessageParameters: null,
                            retryable: null,
                            status: null
                        },
                        paymentRequiredInformationFields: null,
                        paymentRequiredInformationModes: null,
                        selectedAmount: null,
                        selectedBank: null,
                        transfer_id: null
                    }, n
                }
                return r(t, e), t.prototype.render = function() {
                    if (!this.state.isLoading) {
                        var e = this.expectedPathPattern();
                        if (!this.props.location.pathname.match(e)) return u.createElement(l.Redirect, {
                            to: this.expectedPath()
                        })
                    }
                    return u.createElement("div", null, u.createElement("div", {
                        key: "top",
                        className: "top"
                    }, this.showTop()), u.createElement("div", {
                        key: "content",
                        className: "container content"
                    }, u.createElement("div", {
                        className: "row"
                    }, u.createElement("div", {
                        className: "mx-auto"
                    }, u.createElement("div", {
                        className: "d-flex flex-column h-100 justify-content-center text-center"
                    }, u.createElement("div", {
                        className: "card-deck mx-0"
                    }, this.showComponent()))))), u.createElement("div", {
                        key: "bottom",
                        className: "bottom"
                    }, this.showBottom()))
                }, t.prototype.componentDidMount = function() {
                    var e = this;
                    this.loadCollectionDetails().then(function(t) {
                        var n = t.transfer || {},
                            a = n.payment || {},
                            r = p.extractReasonMessageParameters(a),
                            o = null;
                        if (t.status && ["awaiting_payment_request_clearing", "created", "linked", "verification", "processed"].indexOf(t.status) < 0) {
                            var s = i.default.t("status." + t.status);
                            o = {
                                collection: [i.default.t("message.collection_incorrect_status", {
                                    status: s
                                })]
                            }
                        }
                        return e.updateState({
                            collection: {
                                currency: t.currency,
                                status: t.status,
                                suggestedAmount: t.suggested_amount,
                                suggestedBankCode: t.suggested_bank_code
                            },
                            company: {
                                id: t.customer_id,
                                name: t.company_name,
                                uiConfig: t.companyUiConfig
                            },
                            errors: o,
                            payment: {
                                id: a.payment_id,
                                reason: a.reason,
                                reasonMessageParameters: r,
                                retryable: a.retryable,
                                status: a.status
                            },
                            selectedAmount: Number(n.amount),
                            selectedBank: n.bank,
                            transfer_id: n.transfer_id
                        })
                    }).then(function() {
                        var t = e.state.company.uiConfig;
                        t.additional_languages.forEach(function(e) {
                            v.ADDITIONAL_AVAILABLE_LANGUAGES[e] && i.default.addResourceBundle(e, "translation", v.ADDITIONAL_AVAILABLE_LANGUAGES[e], !0, !0)
                        });
                        var n = t.custom_translations;
                        n && Object.keys(n).forEach(function(e) {
                            i.default.hasResourceBundle(e, "translation") && i.default.addResourceBundle(e, "translation", n[e], !0, !0)
                        })
                    }).then(function() {
                        return e.state.errors || e.state.transfer_id ? e.isAtCredentialsRequiredStep() ? e.loadPaymentRequiredInformation() : e.updateState({
                            isLoading: !1
                        }) : e.loadBanksAndAmounts().then(function(t) {
                            return e.updateState({
                                banks: t.banks
                            })
                        }).then(function() {
                            return e.adjustSelectedBank()
                        }).then(function() {
                            return e.updateState({
                                isLoading: !1
                            })
                        })
                    }).catch(function() {})
                }, t.prototype.selectBank = function(e, t) {
                    return this.updateState({
                        amountsFilter: t,
                        selectedBank: e
                    })
                }, t.prototype.selectAmount = function(e) {
                    var t = this;
                    return this.updateState({
                        isLoading: !0,
                        selectedAmount: Number(e)
                    }).then(function() {
                        return t.postBankAndAmount()
                    })
                }, t.prototype.saveBankAndAmount = function(e, t) {
                    var n = this;
                    return this.updateState({
                        isLoading: !0,
                        selectedAmount: Number(t),
                        selectedBank: e
                    }).then(function() {
                        return n.postBankAndAmount()
                    })
                }, t.prototype.postBankAndAmount = function() {
                    var e = this;
                    return this.selectBankAndAmount(this.state.selectedBank.code, this.state.selectedAmount).then(function(t) {
                        return e.updateState({
                            transfer_id: t.transfer_id
                        })
                    }).then(function() {
                        return e.loadPaymentRequiredInformation()
                    }).catch(function() {})
                }, t.prototype.paymentFinish = function(e, t, n, a) {
                    var r = {
                        id: this.state.payment.id,
                        reason: t,
                        reasonMessageParameters: a,
                        retryable: n,
                        status: p.convertToUIStatus(e)
                    };
                    return this.updateState({
                        payment: r
                    })
                }, t.prototype.postInformationForPayment = function(e) {
                    var t = this,
                        n = {
                            transfer_id: this.state.transfer_id,
                            credentials: e
                        };
                    this.postPaymentRequiredInformation(n).then(function(e) {
                        localStorage.setItem("lastUsedBankCode", t.state.selectedBank.code);
                        var n = {
                            isLoading: !1,
                            payment: {
                                id: e.payment_id,
                                status: e.status
                            }
                        };
                        return t.updateState(n)
                    }).catch(function() {})
                }, t.prototype.loadPaymentRequiredInformation = function() {
                    var e = this;
                    return this.loadRequiredInformationForPayment(this.state.transfer_id).then(function(t) {
                        return e.updateState({
                            isLoading: !1,
                            paymentRequiredInformationFields: t.fields,
                            paymentRequiredInformationModes: t.modes
                        })
                    }).catch(function() {})
                }, t.prototype.retryPayment = function() {
                    var e = this,
                        t = {
                            lastPayment: this.state.payment,
                            payment: {}
                        };
                    this.updateState(t).then(function() {
                        return e.loadPaymentRequiredInformation()
                    })
                }, t.prototype.cancelTransfer = function(e) {
                    var t = this;
                    return "cancel_button" === e ? this.cancelPayment(this.state.payment.id, e).then(function() {
                        return t.updateState({
                            isLoading: !1,
                            message: i.default.t("message.transfer_canceled")
                        })
                    }) : this.unlinkTransfer(this.state.transfer_id, e).then(function() {
                        return t.loadBanksAndAmounts()
                    }).then(function(e) {
                        var n = {
                            banks: e.banks,
                            isLoading: !1,
                            selectedAmount: null,
                            selectedBank: e.banks.find(function(e) {
                                return e.code === t.state.selectedBank.code
                            }),
                            transfer_id: null
                        };
                        return t.updateState(n)
                    })
                }, t.prototype.clickBackButton = function(e) {
                    return this.state.payment.id || !this.state.selectedBank ? Promise.resolve() : this.state.selectedAmount ? this.cancelTransfer(e) : this.updateState({
                        selectedBank: null
                    })
                }, t.prototype.showNavigationButton = function() {
                    var e = this;
                    if (this.expectedPath().match(/\/banks$/)) {
                        var t = g.returnUrl("not_started"),
                            n = t ? {} : {
                                opacity: 0
                            };
                        return u.createElement("a", {
                            className: "close-x",
                            style: n,
                            href: t
                        }, u.createElement("span", {
                            "aria-hidden": "true"
                        }, "×"))
                    }
                    var a = this.state.payment.id || !this.state.selectedBank || this.state.lastPayment ? {
                        opacity: 0
                    } : {
                        cursor: "pointer"
                    };
                    return u.createElement("i", {
                        className: "arrow left",
                        style: a,
                        onClick: function() {
                            return e.clickBackButton("arrow")
                        }
                    })
                }, t.prototype.convertToLanguageOption = function(e) {
                    return u.createElement("option", {
                        key: e,
                        value: e
                    }, i.default.t("language." + e))
                }, t.prototype.showLanguageSelector = function() {
                    var e = this,
                        t = Object.keys(i.default.options.resources).filter(function(e) {
                            return "en" !== e && i.default.options.resources[e].translation
                        });
                    return t.length ? u.createElement(b.default, {
                        onChange: function(t) {
                            return e.changeLanguage(t)
                        },
                        defaultValue: v.getCurrentLanguage()
                    }, this.convertToLanguageOption("en"), t.map(function(t) {
                        return e.convertToLanguageOption(t)
                    })) : null
                }, t.prototype.showTop = function() {
                    return this.state.isLoading || this.state.errors ? null : u.createElement("div", {
                        key: "nav",
                        className: "d-flex flex-column flex-md-row px-4 pt-2 pb-0"
                    }, u.createElement("h5", {
                        className: "my-0 mr-md-auto font-weight-normal w-25"
                    }, this.showNavigationButton()), this.showLanguageSelector())
                }, t.prototype.showComponent = function() {
                    var e = this;
                    if (this.state.isLoading) return u.createElement(h.LoadingCard, null);
                    var t = this.state;
                    return u.createElement(l.Switch, null, u.createElement(l.Route, {
                        path: "/:prefix*/status",
                        render: function(n) {
                            var a = ["created", "linked"].indexOf(e.state.collection.status) >= 0 ? function() {
                                return e.retryPayment()
                            } : null;
                            return u.createElement(y.StatusCard, {
                                amount: t.selectedAmount,
                                currency: t.selectedBank.currency,
                                retryAction: a,
                                status: t.payment.status,
                                company: t.company,
                                cancelAction: function() {
                                    return e.cancelTransfer("cancel_button")
                                },
                                reasonMessageParameters: t.payment.reasonMessageParameters,
                                reasonCode: t.payment.reason,
                                retryable: t.payment.retryable
                            })
                        }
                    }), u.createElement(l.Route, {
                        path: "/:prefix*/message",
                        render: function(e) {
                            return u.createElement(_.MessageCard, {
                                message: t.message,
                                company: t.company
                            })
                        }
                    }), u.createElement(l.Route, {
                        path: "/:prefix*",
                        render: function(e) {
                            return u.createElement(m.ErrorCard, {
                                errors: t.errors,
                                company: t.company
                            })
                        }
                    }), u.createElement(l.Route, {
                        path: "/:prefix*/processing",
                        render: function(n) {
                            return u.createElement(E.PaymentDynamicInformation, {
                                bank: t.selectedBank,
                                amount: t.selectedAmount,
                                company: t.company,
                                payment: t.payment,
                                retryAction: function() {
                                    return e.retryPayment()
                                },
                                cancelAction: function() {
                                    return e.cancelTransfer("cancel_button")
                                },
                                history: e.props.history,
                                location: e.props.location,
                                paymentFinishAction: function() {
                                    for (var t = [], n = 0; n < arguments.length; n++) t[n] = arguments[n];
                                    return e.paymentFinish.apply(e, t)
                                }
                            })
                        }
                    }), u.createElement(l.Route, {
                        path: "/:prefix*/credentials",
                        render: function(n) {
                            return u.createElement(k.PaymentRequiredInformation, {
                                fieldsDefinition: t.paymentRequiredInformationFields,
                                modesDefinition: t.paymentRequiredInformationModes,
                                bank: t.selectedBank,
                                amount: t.selectedAmount,
                                backAction: t.lastPayment ? null : function() {
                                    return e.clickBackButton("back_button")
                                },
                                postFieldsForPayment: function(t) {
                                    return e.postInformationForPayment(t)
                                }
                            })
                        }
                    }), u.createElement(l.Route, {
                        path: "/:prefix*/amounts",
                        render: function(n) {
                            return u.createElement(c.AmountSelection, {
                                bank: t.selectedBank,
                                uiConfig: t.company.uiConfig,
                                amountsFilter: t.amountsFilter,
                                selectAmount: function(t) {
                                    return e.selectAmount(t)
                                }
                            })
                        }
                    }), u.createElement(l.Route, {
                        path: "/:prefix*/banks",
                        render: function() {
                            return u.createElement(d.BankSelection, {
                                banks: t.banks,
                                selectBank: function(t, n) {
                                    return e.selectBank(t, n)
                                },
                                uiConfig: t.company.uiConfig,
                                suggestedBankCodes: e.suggestedBanks(),
                                selectBankAndAmount: function(t, n) {
                                    return e.saveBankAndAmount(t, n)
                                }
                            })
                        }
                    }), u.createElement(l.Route, {
                        path: "/",
                        render: function() {
                            return u.createElement(m.ErrorCard, {
                                errors: {
                                    path: ["Invalid URL"]
                                },
                                company: t.company
                            })
                        }
                    }))
                }, t.prototype.showBottom = function() {
                    return this.state.isLoading || this.state.errors ? null : u.createElement(f.Footer, {
                        company: this.state.company
                    })
                }, t.prototype.basePath = function() {
                    var e = this.state,
                        t = "";
                    return e.company.id && e.collection.currency && (t = "/companies/" + e.company.id + "/currencies/" + e.collection.currency, e.selectedBank && (t = t + "/banks/" + e.selectedBank.code)), t
                }, t.prototype.expectedPath = function() {
                    var e = this.state;
                    if (e.isLoading) return this.props.location.pathname;
                    var t = this.basePath();
                    return e.errors ? t + "" : e.message ? t + "/message" : ["awaiting_payment_request_clearing", "error", "success", "verification"].indexOf(e.payment.status) >= 0 ? t + "/status/" + e.payment.status : ["created", "in_process"].indexOf(e.payment.status) >= 0 ? t + "/amounts/" + this.amountRangePath() + "/processing" : this.isAtCredentialsRequiredStep() && e.paymentRequiredInformationFields ? t + "/amounts/" + this.amountRangePath() + "/credentials" : e.selectedBank && !e.selectedAmount ? t + "/amounts" : t + "/banks"
                }, t.prototype.expectedPathPattern = function() {
                    var e = this.expectedPath();
                    return e.indexOf("/processing") > 0 ? new RegExp("^" + e + "(/[^/]*)?$") : new RegExp("^" + e + "$")
                }, t.prototype.amountRangePath = function() {
                    return this.state.selectedAmount ? this.state.selectedAmount < 500 ? "min" : this.state.selectedAmount > 3e3 ? "max" : "mid" : ""
                }, t.prototype.adjustSelectedBank = function() {
                    var e = this.props.location.pathname.match(/banks\/([^\/]+)\/amounts/);
                    if (e && this.state.banks && !this.state.selectedBank) {
                        var t = this.state.banks.find(function(t) {
                            return t.code === e[1]
                        });
                        this.updateState({
                            selectedBank: t
                        })
                    }
                }, t.prototype.suggestedBanks = function() {
                    var e = [],
                        t = localStorage.getItem("lastUsedBankCode");
                    return t && e.push(t), this.state.collection.suggestedBankCode && e.push(this.state.collection.suggestedBankCode), e
                }, t.prototype.isAtCredentialsRequiredStep = function() {
                    var e = this.state,
                        t = e.transfer_id,
                        n = e.payment;
                    return t && (!n.status || "payment_request_cleared" === n.status)
                }, t
            }(p.BaseComponent);
        t.default = l.withRouter(O)
    },
    604: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var i = o(n(39)),
            u = s(n(1)),
            l = n(66),
            c = n(57),
            d = n(336),
            p = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.state = {
                        amounts: n.props.bank.amounts
                    }, n
                }
                return r(t, e), t.prototype.render = function() {
                    var e = this;
                    return u.createElement("div", null, u.createElement("div", {
                        className: "payment-header px-4 pt-0 pb-2 mx-auto text-center"
                    }, u.createElement("h3", {
                        className: "step-title"
                    }, i.default.t("message.select_amount"))), u.createElement("div", {
                        className: "card shadow-card card-amount mx-auto mb-3"
                    }, u.createElement("div", {
                        className: "card-header"
                    }, u.createElement("div", {
                        className: "bank-logo mx-auto"
                    }, u.createElement("img", {
                        src: this.props.bank.uiConfig.url,
                        alt: this.props.bank.name
                    }))), u.createElement("div", {
                        className: "card-body"
                    }, u.createElement(d.AmountsFilter, {
                        banks: [this.props.bank],
                        initialFilter: this.props.amountsFilter,
                        onFilter: function(t) {
                            return e.updateState({
                                amounts: t[0].amounts
                            })
                        },
                        onHitEnter: function() {
                            return e.hitEnterOnFilter()
                        }
                    }), !this.props.bank.amounts.length && u.createElement("p", {
                        className: "card-subtext-sm"
                    }, i.default.t("message.no_amount_available")), u.createElement("ul", {
                        className: "list-unstyled amounts-list"
                    }, this.sortAmounts(this.state.amounts, this.props.uiConfig.sort_amounts_desc).map(function(t) {
                        return u.createElement("li", {
                            key: t
                        }, u.createElement(l.Button, {
                            type: "button",
                            color: "primary",
                            "aria-label": String(t),
                            className: "btn-lg btn-block mt-auto",
                            onClick: function() {
                                return e.props.selectAmount(t)
                            }
                        }, e.formatAmount(t, e.props.bank.currency)))
                    })))))
                }, t.prototype.hitEnterOnFilter = function() {
                    1 === this.state.amounts.length && this.props.selectAmount(this.state.amounts[0])
                }, t
            }(c.BaseComponent);
        t.AmountSelection = p
    },
    613: function(e, t, n) {
        var a = {
            "./af": 201,
            "./af.js": 201,
            "./ar": 202,
            "./ar-dz": 203,
            "./ar-dz.js": 203,
            "./ar-kw": 204,
            "./ar-kw.js": 204,
            "./ar-ly": 205,
            "./ar-ly.js": 205,
            "./ar-ma": 206,
            "./ar-ma.js": 206,
            "./ar-sa": 207,
            "./ar-sa.js": 207,
            "./ar-tn": 208,
            "./ar-tn.js": 208,
            "./ar.js": 202,
            "./az": 209,
            "./az.js": 209,
            "./be": 210,
            "./be.js": 210,
            "./bg": 211,
            "./bg.js": 211,
            "./bm": 212,
            "./bm.js": 212,
            "./bn": 213,
            "./bn-bd": 214,
            "./bn-bd.js": 214,
            "./bn.js": 213,
            "./bo": 215,
            "./bo.js": 215,
            "./br": 216,
            "./br.js": 216,
            "./bs": 217,
            "./bs.js": 217,
            "./ca": 218,
            "./ca.js": 218,
            "./cs": 219,
            "./cs.js": 219,
            "./cv": 220,
            "./cv.js": 220,
            "./cy": 221,
            "./cy.js": 221,
            "./da": 222,
            "./da.js": 222,
            "./de": 223,
            "./de-at": 224,
            "./de-at.js": 224,
            "./de-ch": 225,
            "./de-ch.js": 225,
            "./de.js": 223,
            "./dv": 226,
            "./dv.js": 226,
            "./el": 227,
            "./el.js": 227,
            "./en-au": 228,
            "./en-au.js": 228,
            "./en-ca": 229,
            "./en-ca.js": 229,
            "./en-gb": 230,
            "./en-gb.js": 230,
            "./en-ie": 231,
            "./en-ie.js": 231,
            "./en-il": 232,
            "./en-il.js": 232,
            "./en-in": 233,
            "./en-in.js": 233,
            "./en-nz": 234,
            "./en-nz.js": 234,
            "./en-sg": 235,
            "./en-sg.js": 235,
            "./eo": 236,
            "./eo.js": 236,
            "./es": 237,
            "./es-do": 238,
            "./es-do.js": 238,
            "./es-mx": 239,
            "./es-mx.js": 239,
            "./es-us": 240,
            "./es-us.js": 240,
            "./es.js": 237,
            "./et": 241,
            "./et.js": 241,
            "./eu": 242,
            "./eu.js": 242,
            "./fa": 243,
            "./fa.js": 243,
            "./fi": 244,
            "./fi.js": 244,
            "./fil": 245,
            "./fil.js": 245,
            "./fo": 246,
            "./fo.js": 246,
            "./fr": 247,
            "./fr-ca": 248,
            "./fr-ca.js": 248,
            "./fr-ch": 249,
            "./fr-ch.js": 249,
            "./fr.js": 247,
            "./fy": 250,
            "./fy.js": 250,
            "./ga": 251,
            "./ga.js": 251,
            "./gd": 252,
            "./gd.js": 252,
            "./gl": 253,
            "./gl.js": 253,
            "./gom-deva": 254,
            "./gom-deva.js": 254,
            "./gom-latn": 255,
            "./gom-latn.js": 255,
            "./gu": 256,
            "./gu.js": 256,
            "./he": 257,
            "./he.js": 257,
            "./hi": 258,
            "./hi.js": 258,
            "./hr": 259,
            "./hr.js": 259,
            "./hu": 260,
            "./hu.js": 260,
            "./hy-am": 261,
            "./hy-am.js": 261,
            "./id": 262,
            "./id.js": 262,
            "./is": 263,
            "./is.js": 263,
            "./it": 264,
            "./it-ch": 265,
            "./it-ch.js": 265,
            "./it.js": 264,
            "./ja": 266,
            "./ja.js": 266,
            "./jv": 267,
            "./jv.js": 267,
            "./ka": 268,
            "./ka.js": 268,
            "./kk": 269,
            "./kk.js": 269,
            "./km": 270,
            "./km.js": 270,
            "./kn": 271,
            "./kn.js": 271,
            "./ko": 272,
            "./ko.js": 272,
            "./ku": 273,
            "./ku.js": 273,
            "./ky": 274,
            "./ky.js": 274,
            "./lb": 275,
            "./lb.js": 275,
            "./lo": 276,
            "./lo.js": 276,
            "./lt": 277,
            "./lt.js": 277,
            "./lv": 278,
            "./lv.js": 278,
            "./me": 279,
            "./me.js": 279,
            "./mi": 280,
            "./mi.js": 280,
            "./mk": 281,
            "./mk.js": 281,
            "./ml": 282,
            "./ml.js": 282,
            "./mn": 283,
            "./mn.js": 283,
            "./mr": 284,
            "./mr.js": 284,
            "./ms": 285,
            "./ms-my": 286,
            "./ms-my.js": 286,
            "./ms.js": 285,
            "./mt": 287,
            "./mt.js": 287,
            "./my": 288,
            "./my.js": 288,
            "./nb": 289,
            "./nb.js": 289,
            "./ne": 290,
            "./ne.js": 290,
            "./nl": 291,
            "./nl-be": 292,
            "./nl-be.js": 292,
            "./nl.js": 291,
            "./nn": 293,
            "./nn.js": 293,
            "./oc-lnc": 294,
            "./oc-lnc.js": 294,
            "./pa-in": 295,
            "./pa-in.js": 295,
            "./pl": 296,
            "./pl.js": 296,
            "./pt": 297,
            "./pt-br": 298,
            "./pt-br.js": 298,
            "./pt.js": 297,
            "./ro": 299,
            "./ro.js": 299,
            "./ru": 300,
            "./ru.js": 300,
            "./sd": 301,
            "./sd.js": 301,
            "./se": 302,
            "./se.js": 302,
            "./si": 303,
            "./si.js": 303,
            "./sk": 304,
            "./sk.js": 304,
            "./sl": 305,
            "./sl.js": 305,
            "./sq": 306,
            "./sq.js": 306,
            "./sr": 307,
            "./sr-cyrl": 308,
            "./sr-cyrl.js": 308,
            "./sr.js": 307,
            "./ss": 309,
            "./ss.js": 309,
            "./sv": 310,
            "./sv.js": 310,
            "./sw": 311,
            "./sw.js": 311,
            "./ta": 312,
            "./ta.js": 312,
            "./te": 313,
            "./te.js": 313,
            "./tet": 314,
            "./tet.js": 314,
            "./tg": 315,
            "./tg.js": 315,
            "./th": 316,
            "./th.js": 316,
            "./tk": 317,
            "./tk.js": 317,
            "./tl-ph": 318,
            "./tl-ph.js": 318,
            "./tlh": 319,
            "./tlh.js": 319,
            "./tr": 320,
            "./tr.js": 320,
            "./tzl": 321,
            "./tzl.js": 321,
            "./tzm": 322,
            "./tzm-latn": 323,
            "./tzm-latn.js": 323,
            "./tzm.js": 322,
            "./ug-cn": 324,
            "./ug-cn.js": 324,
            "./uk": 325,
            "./uk.js": 325,
            "./ur": 326,
            "./ur.js": 326,
            "./uz": 327,
            "./uz-latn": 328,
            "./uz-latn.js": 328,
            "./uz.js": 327,
            "./vi": 329,
            "./vi.js": 329,
            "./x-pseudo": 330,
            "./x-pseudo.js": 330,
            "./yo": 331,
            "./yo.js": 331,
            "./zh-cn": 332,
            "./zh-cn.js": 332,
            "./zh-hk": 333,
            "./zh-hk.js": 333,
            "./zh-mo": 334,
            "./zh-mo.js": 334,
            "./zh-tw": 335,
            "./zh-tw.js": 335
        };

        function r(e) {
            var t = o(e);
            return n(t)
        }

        function o(e) {
            var t = a[e];
            if (!(t + 1)) {
                var n = new Error("Cannot find module '" + e + "'");
                throw n.code = "MODULE_NOT_FOUND", n
            }
            return t
        }
        r.keys = function() {
            return Object.keys(a)
        }, r.resolve = o, e.exports = r, r.id = 613
    },
    615: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var i = o(n(39)),
            u = s(n(1)),
            l = n(66),
            c = n(57),
            d = n(336),
            p = o(n(337)),
            m = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.state = {
                        amountsFilter: n.props.suggestedAmount ? String(n.props.suggestedAmount) : "",
                        banks: n.props.banks,
                        nearestAmountPerBank: {},
                        selectedAmount: "",
                        selectedBank: null
                    }, n
                }
                return r(t, e), t.prototype.render = function() {
                    return u.createElement("div", null, u.createElement("div", {
                        className: this.mobileLayoutClasses("payment-header px-4 pt-0 pb-2 mx-auto text-center banks-list-header")
                    }, u.createElement("h3", {
                        className: "step-title"
                    }, i.default.t("message.select_bank")), !this.props.uiConfig.hide_amounts_snippet && this.showFilterAmountsField(!1)), this.showAsList(), this.showAsBoxes())
                }, t.prototype.showFirstAmounts = function(e) {
                    var t = this,
                        n = this.sortAmounts(e.amounts, this.props.uiConfig.sort_amounts_desc),
                        a = n.length > 5,
                        r = (a ? n.slice(0, 4) : n).map(function(n) {
                            return u.createElement("li", {
                                key: e.code + n
                            }, t.formatAmount(n, e.currency))
                        });
                    return a && r.push(u.createElement("li", {
                        key: "more"
                    }, u.createElement("a", {
                        className: "more-amounts",
                        onClick: function() {
                            return t.selectBank(e)
                        }
                    }, i.default.t("message.more_amounts", {
                        count: n.length - 4
                    })))), r
                }, t.prototype.showAsList = function() {
                    var e = this;
                    if ("list" === this.props.uiConfig.mobile_layout) return u.createElement("div", {
                        className: "d-flex flex-column banks-list"
                    }, this.showFilterAmountsField(!0), this.sortBanks(this.state.banks).map(function(t) {
                        return u.createElement("div", {
                            className: e.cardClasses(t, "d-flex flex-row card mb-2 shadow-card"),
                            key: t.code
                        }, u.createElement("div", {
                            className: "bank-logo d-flex align-items-center"
                        }, u.createElement("img", {
                            src: t.uiConfig.url,
                            alt: t.name,
                            className: "mx-auto"
                        })), e.renderAmountsSelector(t), e.renderConfirmButton(t), e.renderNoAmountsMessage(t))
                    }))
                }, t.prototype.showAsBoxes = function() {
                    var e = this;
                    return u.createElement("div", {
                        className: this.mobileLayoutClasses("d-flex flex-row flex-wrap justify-content-around text-center banks-boxes")
                    }, this.sortBanks(this.state.banks).map(function(t) {
                        return u.createElement("div", {
                            className: e.cardClasses(t, "card mb-3 mx-2 shadow-card"),
                            key: t.code
                        }, u.createElement("div", {
                            className: "card-header"
                        }, u.createElement("div", {
                            className: "bank-logo mx-auto"
                        }, u.createElement("img", {
                            src: t.uiConfig.url,
                            alt: t.name
                        }))), u.createElement("div", {
                            className: "card-body pb-3 d-flex flex-column"
                        }, t.amounts.length ? e.showCardWithAmounts(t) : e.showCardWithoutAmounts(t)))
                    }))
                }, t.prototype.showFilterAmountsField = function(e) {
                    var t = this;
                    return u.createElement(d.AmountsFilter, {
                        banks: this.props.banks,
                        initialFilter: this.state.amountsFilter,
                        onFilter: function(e, n, a) {
                            return t.updateState({
                                amountsFilter: a,
                                banks: e,
                                nearestAmountPerBank: n
                            })
                        },
                        onHitEnter: function() {
                            return t.hitEnterOnFilter(e)
                        }
                    })
                }, t.prototype.selectAmount = function(e, t) {
                    this.updateState({
                        selectedBank: e,
                        selectedAmount: t
                    })
                }, t.prototype.defaultValue = function(e) {
                    return this.state.nearestAmountPerBank[e.code] ? this.state.nearestAmountPerBank[e.code] : this.state.selectedBank === e ? this.state.selectedAmount : ""
                }, t.prototype.confirmBankAndAmountSelection = function(e) {
                    var t = this.state.selectedAmount,
                        n = t ? parseFloat(t) : this.state.nearestAmountPerBank[e.code];
                    this.props.selectBankAndAmount(e, n)
                }, t.prototype.disableConfirmButton = function(e) {
                    return !this.state.nearestAmountPerBank[e.code] && !(this.state.selectedBank === e && this.state.selectedAmount)
                }, t.prototype.renderAmountsSelector = function(e) {
                    var t = this;
                    return e.amounts.length ? u.createElement("div", {
                        className: "bank-amounts d-flex align-items-center"
                    }, u.createElement(p.default, {
                        onChange: function(n) {
                            return t.selectAmount(e, n)
                        },
                        defaultValue: this.defaultValue(e),
                        value: this.defaultValue(e)
                    }, u.createElement("option", {
                        value: ""
                    }, i.default.t("button.select_amount")), this.sortAmounts(e.amounts, this.props.uiConfig.sort_amounts_desc).map(function(n) {
                        return u.createElement("option", {
                            key: e.code + n,
                            value: n
                        }, t.formatAmount(n, e.currency))
                    })), this.state.nearestAmountPerBank[e.code] && u.createElement("p", {
                        className: "mb-0"
                    }, i.default.t("message.amounts_found", {
                        count: e.amounts.length
                    }))) : null
                }, t.prototype.renderConfirmButton = function(e) {
                    var t = this;
                    return e.amounts.length ? u.createElement("div", {
                        className: "bank-button d-flex align-items-center"
                    }, u.createElement("button", {
                        className: "btn btn-primary",
                        onClick: function() {
                            return t.confirmBankAndAmountSelection(e)
                        },
                        disabled: this.disableConfirmButton(e)
                    }, u.createElement("i", {
                        className: "arrow right"
                    }))) : null
                }, t.prototype.renderNoAmountsMessage = function(e) {
                    return e.amounts.length ? null : u.createElement("div", {
                        className: "bank-no-amounts d-flex align-items-center"
                    }, i.default.t("message.no_amount_available"))
                }, t.prototype.sortBanks = function(e) {
                    var t = this,
                        n = e.sort(function(e, n) {
                            var a = 0;
                            switch (t.props.uiConfig.banks_order) {
                                case "popularity":
                                    a = t.compareNumbers(e.uiConfig.popularity, n.uiConfig.popularity);
                                    break;
                                case "amounts":
                                    a = t.compareNumbers(e.amounts.length, n.amounts.length, "desc")
                            }
                            return 0 === a && (a = e.name > n.name ? 1 : e.name < n.name ? -1 : 0), a
                        }),
                        a = n.filter(function(e) {
                            return 0 === e.amounts.length
                        }),
                        r = n.filter(function(e) {
                            return 0 !== e.amounts.length
                        });
                    if (this.props.suggestedBankCodes)
                        for (var o = function(e) {
                                var t = s.props.suggestedBankCodes[e],
                                    n = r.findIndex(function(e) {
                                        return e.code === t
                                    });
                                if (n > 0) {
                                    var a = r.splice(n, 1)[0];
                                    r.unshift(a)
                                }
                            }, s = this, i = this.props.suggestedBankCodes.length - 1; i >= 0; i--) o(i);
                    return r.concat(a)
                }, t.prototype.compareNumbers = function(e, t, n) {
                    void 0 === n && (n = "asc");
                    var a = 0;
                    return 0 === e && 0 === t ? a = 0 : 0 === e ? a = 1 : 0 === t ? a = -1 : (a = e > t ? 1 : e < t ? -1 : 0, a = "asc" === n ? a : -a), a
                }, t.prototype.showCardWithAmounts = function(e) {
                    var t = this,
                        n = [];
                    return this.props.uiConfig.hide_amounts_snippet || n.push(u.createElement("p", {
                        key: "subtext",
                        className: "card-subtext-sm"
                    }, i.default.t("message.amount_available", {
                        count: e.amounts.length
                    })), u.createElement("ul", {
                        key: "amounts",
                        className: "list-unstyled amounts-list"
                    }, this.showFirstAmounts(e))), n.push(u.createElement(l.Button, {
                        key: "button",
                        type: "button",
                        color: "primary",
                        "aria-label": e.name,
                        className: "btn-lg btn-block mt-auto",
                        onClick: function(n) {
                            return t.selectBank(e)
                        }
                    }, i.default.t("button.select", {
                        name: e.name
                    }))), n
                }, t.prototype.showCardWithoutAmounts = function(e) {
                    return u.createElement("p", {
                        className: "card-subtext-sm mt-auto"
                    }, i.default.t("message.no_amount_available"))
                }, t.prototype.cardClasses = function(e, t) {
                    return 0 === e.amounts.length ? t + " empty" : t
                }, t.prototype.mobileLayoutClasses = function(e) {
                    return "box" === this.props.uiConfig.mobile_layout ? e + " mobile-banks-boxes" : e
                }, t.prototype.selectBank = function(e) {
                    var t = this.props.banks.find(function(t) {
                        return t.code === e.code
                    });
                    this.props.selectBank(t, this.state.amountsFilter)
                }, t.prototype.hitEnterOnFilter = function(e) {
                    var t = this.state.banks.filter(function(e) {
                        return e.amounts.length > 0
                    });
                    1 === t.length && (e || 1 === t[0].amounts.length ? this.props.selectBankAndAmount(t[0], this.state.nearestAmountPerBank[t[0].code]) : this.props.selectBank(t[0], this.state.amountsFilter))
                }, t
            }(c.BaseComponent);
        t.BankSelection = m
    },
    618: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var i = o(n(39)),
            u = o(n(8)),
            l = s(n(1)),
            c = n(66),
            d = n(106),
            p = function(e) {
                function t() {
                    return null !== e && e.apply(this, arguments) || this
                }
                return r(t, e), t.prototype.render = function() {
                    return l.createElement("div", {
                        className: "card shadow-card"
                    }, l.createElement("div", {
                        className: "card-header"
                    }, l.createElement("div", {
                        className: "circle-loader load-complete-error"
                    }, l.createElement("div", {
                        className: "draw error-x"
                    }))), l.createElement("div", {
                        className: "card-body"
                    }, l.createElement("p", null, l.createElement("em", null, i.default.t("message.communication_error"))), this.showErrors(), this.showRetryButton(), l.createElement(d.ReturnUrlButton, {
                        state: "error",
                        company: this.props.company
                    })))
                }, t.prototype.showErrors = function() {
                    if (!this.props.errors) return null;
                    if (this.props.errors.suspension_ends_at) {
                        var e = u.default(this.props.errors.suspension_ends_at[0]).format("lll"),
                            t = i.default.t("reasons." + this.props.errors.payment[0], {
                                time: e
                            });
                        return l.createElement("ul", {
                            className: "list-unstyled"
                        }, l.createElement("li", null, t))
                    }
                    var n = Object.values(this.props.errors).reduce(function(e, t) {
                        return e.concat(t)
                    }).map(function(e) {
                        return i.default.t(["reasons." + e, e])
                    });
                    return l.createElement("ul", {
                        className: "list-unstyled"
                    }, n.map(function(e, t) {
                        return l.createElement("li", {
                            key: "message-" + t
                        }, e)
                    }))
                }, t.prototype.showRetryButton = function() {
                    var e = this;
                    return this.props.retryAction ? l.createElement(c.Button, {
                        type: "submit",
                        color: "primary",
                        "aria-label": i.default.t("button.try_again"),
                        className: "btn-lg btn-block mt-3 btn-retry",
                        onClick: function() {
                            return e.props.retryAction()
                        }
                    }, i.default.t("button.try_again")) : null
                }, t
            }(l.Component);
        t.ErrorCard = p
    },
    619: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var s = o(n(1)),
            i = function(e) {
                function t() {
                    return null !== e && e.apply(this, arguments) || this
                }
                return r(t, e), t.prototype.render = function() {
                    var e = this.props.company.uiConfig;
                    return s.createElement("footer", {
                        className: "d-flex flex-column"
                    }, s.createElement("div", {
                        className: "col-12 col-md company-signature mt-1"
                    }, s.createElement("img", {
                        className: "mb-2",
                        src: e.url,
                        alt: this.props.company.name
                    }), !e.hide_display_name && s.createElement("p", {
                        className: "company-name text-center"
                    }, this.props.company.name)))
                }, t
            }(s.Component);
        t.Footer = i
    },
    620: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var i = o(n(39)),
            u = s(n(1)),
            l = function(e) {
                function t() {
                    return null !== e && e.apply(this, arguments) || this
                }
                return r(t, e), t.prototype.render = function() {
                    return u.createElement("div", {
                        className: "card shadow-card loading-card mx-auto mb-3"
                    }, u.createElement("div", {
                        className: "card-header"
                    }, u.createElement("div", {
                        className: "circle-loader"
                    })), u.createElement("div", {
                        className: "card-body"
                    }, u.createElement("p", null, i.default.t("message.loading"))))
                }, t
            }(u.Component);
        t.LoadingCard = l
    },
    621: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var s = o(n(1)),
            i = n(106),
            u = function(e) {
                function t() {
                    return null !== e && e.apply(this, arguments) || this
                }
                return r(t, e), t.prototype.render = function() {
                    return s.createElement("div", {
                        className: "card shadow-card"
                    }, s.createElement("div", {
                        className: "card-header"
                    }, s.createElement("div", {
                        className: "circle-loader load-complete"
                    }, s.createElement("div", {
                        className: "draw checkmark"
                    }))), s.createElement("div", {
                        className: "card-body"
                    }, s.createElement("p", null, s.createElement("em", null, this.props.message)), s.createElement(i.ReturnUrlButton, {
                        state: "cancel",
                        company: this.props.company
                    })))
                }, t
            }(s.Component);
        t.MessageCard = u
    },
    622: function(e, t, n) {},
    623: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var s = o(n(1)),
            i = n(57),
            u = n(624),
            l = n(338),
            c = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.eventsPoolOn = !0, n.updateInterval = 0, n.lastEventTimestamp = 0, n.state = {
                        paymentReasonCode: n.props.payment.reason,
                        paymentRetryable: n.props.payment.retryable,
                        paymentStatus: n.props.payment.status,
                        progress: null,
                        question: {
                            text: "",
                            timeout: null
                        },
                        reasonMessageParameters: n.props.payment.reasonMessageParameters,
                        replyTo: null
                    }, n
                }
                return r(t, e), t.prototype.render = function() {
                    var e = this;
                    return this.state.question.text || this.state.question.kind ? s.createElement(u.QuestionCard, {
                        bank: this.props.bank,
                        question: this.state.question,
                        progress: this.state.progress,
                        onQuestionReply: function(t) {
                            return e.onQuestionReply(t)
                        }
                    }) : s.createElement(l.StatusCard, {
                        amount: this.props.amount,
                        currency: this.props.bank.currency,
                        retryAction: this.props.retryAction,
                        cancelAction: this.props.cancelAction,
                        retryable: this.state.paymentRetryable,
                        progress: this.state.progress,
                        company: this.props.company,
                        reasonMessageParameters: this.state.reasonMessageParameters,
                        status: this.state.paymentStatus,
                        reasonCode: this.state.paymentReasonCode
                    })
                }, t.prototype.componentWillUnmount = function() {
                    return this.stopEventsPolling()
                }, t.prototype.componentDidMount = function() {
                    this.startEventsPolling()
                }, t.prototype.isPolling = function() {
                    return !!this.updateInterval
                }, t.prototype.startEventsPolling = function() {
                    this.stopEventsPolling(), this.eventsPoolOn = !0, this.poolUserEvents()
                }, t.prototype.stopEventsPolling = function() {
                    this.updateInterval && (clearTimeout(this.updateInterval), this.updateInterval = 0), this.eventsPoolOn = !1
                }, t.prototype.onQuestionReply = function(e) {
                    this.postPaymentQuestionAnswer(this.props.payment.id, this.state.replyTo, e)
                }, t.prototype.poolUserEvents = function() {
                    var e = this;
                    this.getUserEvents().catch(function() {}).then(function() {
                        e.eventsPoolOn && (e.updateInterval = setTimeout(function() {
                            return e.poolUserEvents()
                        }, 1e3))
                    })
                }, t.prototype.getUserEvents = function() {
                    var e = this;
                    return this.getPaymentUserEvents(this.props.payment.id, this.lastEventTimestamp).then(function(t) {
                        return t.events.forEach(function(t) {
                            return e.handleMessage(t)
                        })
                    })
                }, t.prototype.handleMessage = function(e) {
                    var t = this,
                        n = e.event,
                        a = parseInt(String(e.timestamp), 10),
                        r = this.emptyQuestion();
                    switch (e.kind) {
                        case "PROGRESS":
                            this.updateState({
                                progress: n.progress
                            });
                            break;
                        case "QUESTION":
                            r.kind = n.kind, r.text = n.message, r.options = n.options, r.size = n.size, Object.entries(n).forEach(function(e) {
                                ["kind", "message", "options", "size"].indexOf(e[0]) < 0 && (r[e[0]] = e[1])
                            });
                            var o = void 0;
                            try {
                                o = JSON.parse(localStorage.getItem("question"))
                            } catch (e) {
                                o = {}
                            }
                            var s = void 0;
                            if (o && o.timestamp >= a && o.ttl && o.ttl - Date.now() > 0) s = o.startTime;
                            else {
                                var u = {
                                    startTime: s = Date.now(),
                                    timeout: n.timeout,
                                    timestamp: a,
                                    ttl: s + 12e4
                                };
                                localStorage.setItem("question", JSON.stringify(u))
                            }
                            r.timeout = s + parseInt(String(n.timeout), 10), this.updateState({
                                question: r,
                                replyTo: e.replyTo
                            });
                            break;
                        case "ANSWER":
                            this.state.replyTo === n.message && this.updateState({
                                question: r,
                                replyTo: null
                            });
                            break;
                        case "FINISH":
                            this.stopEventsPolling();
                            var l = i.extractReasonMessageParameters(n);
                            this.updateState({
                                paymentReasonCode: this.state.paymentReasonCode || n.reason,
                                paymentRetryable: n.retryable,
                                paymentStatus: i.convertToUIStatus(n.status),
                                question: r,
                                reasonMessageParameters: l,
                                replyTo: null
                            }).then(function() {
                                t.props.paymentFinishAction(t.state.paymentStatus, t.state.paymentReasonCode, t.state.paymentRetryable, t.state.reasonMessageParameters)
                            })
                    }
                    this.lastEventTimestamp = a, this.adjustPath()
                }, t.prototype.emptyQuestion = function() {
                    return {
                        text: "",
                        timeout: null
                    }
                }, t.prototype.adjustPath = function() {
                    if (this.props.location && this.props.history) {
                        var e = this.expectedPath(),
                            t = this.props.location.pathname.match(/(^.*\/processing)(.*)/);
                        t[2] !== e && this.props.history.push("" + t[1] + e, !1)
                    }
                }, t.prototype.expectedPath = function() {
                    if (this.state.question.text) return "/question";
                    switch (this.state.question.kind) {
                        case "OTP_REQUEST":
                            return "/otp";
                        case "ACCOUNT_SELECTION":
                            return "/account";
                        case "APP_LOGIN_REQUEST":
                            return "/app_login";
                        case "APP_APPROVAL_REQUEST":
                            return "/app_approve";
                        default:
                            return ""
                    }
                }, t
            }(i.BaseComponent);
        t.PaymentDynamicInformation = c
    },
    624: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var i = o(n(39)),
            u = s(n(1)),
            l = n(66),
            c = n(57),
            d = n(339),
            p = n(147),
            m = n(340),
            f = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.state = {
                        answer: "",
                        answerState: null,
                        disableAnswer: !1
                    }, n
                }
                return r(t, e), t.prototype.render = function() {
                    return u.createElement("div", null, u.createElement("div", {
                        className: "payment-header px-4 pt-0 pb-4 pb-2 mx-auto text-center"
                    }, u.createElement("h3", {
                        className: "step-title"
                    })), u.createElement("div", {
                        className: "card shadow-card card-bankinfo mx-auto mb-3"
                    }, c.isNumber(this.props.progress) && u.createElement(m.ProgressBar, {
                        progress: this.props.progress
                    }), u.createElement("div", {
                        className: "card-header"
                    }, u.createElement("div", {
                        className: "bank-logo mx-auto"
                    }, u.createElement("img", {
                        src: this.props.bank.uiConfig.url,
                        alt: this.props.bank.name
                    }))), u.createElement("div", {
                        className: "card-body d-flex flex-column"
                    }, u.createElement("p", {
                        className: "card-subtext-sm blue-subtext validation-text",
                        dangerouslySetInnerHTML: {
                            __html: this.questionText()
                        }
                    }), this.questionForm())))
                }, t.prototype.questionForm = function() {
                    var e = this;
                    return "CONFIRMATION_REQUEST" === this.props.question.kind ? u.createElement("div", null, this.countdown(), u.createElement("a", {
                        "aria-label": i.default.t("button.no"),
                        tabIndex: -1,
                        className: "btn-lg mt-3 btn btn-secondary btn-confirmation",
                        onClick: function() {
                            return !e.state.disableAnswer && e.props.onQuestionReply("no")
                        }
                    }, i.default.t("button.no")), u.createElement("a", {
                        "aria-label": i.default.t("button.yes"),
                        tabIndex: -1,
                        className: "btn-lg mt-3 btn btn-primary btn-confirmation",
                        onClick: function() {
                            return !e.state.disableAnswer && e.props.onQuestionReply("yes")
                        }
                    }, i.default.t("button.yes"))) : u.createElement("form", {
                        onSubmit: function(t) {
                            return e.onQuestionReply(t)
                        }
                    }, this.notificationQuestion(), this.comboBoxQuestion(), this.inputQuestion(), this.questionSubmitButton())
                }, t.prototype.onQuestionReply = function(e) {
                    e.preventDefault(), "success" === this.state.answerState && this.props.onQuestionReply(this.state.answer)
                }, t.prototype.disableAnswer = function() {
                    this.updateState({
                        disableAnswer: !0
                    })
                }, t.prototype.saveAnswer = function(e) {
                    this.updateState({
                        answer: e,
                        answerState: e ? "success" : "error"
                    })
                }, t.prototype.questionText = function() {
                    if (this.props.question.options && this.props.question.options.length) return "";
                    var e = this.translationsKeys("questions");
                    return i.default.t(e, this.props.question)
                }, t.prototype.questionPlaceholder = function() {
                    var e = this.translationsKeys("placeholders");
                    return i.default.t(e, this.props.question)
                }, t.prototype.translationsKeys = function(e) {
                    var t = this.props.question,
                        n = "CONFIRMATION_REQUEST" === t.kind ? t.text : t.kind || t.text,
                        a = ["banks." + this.bankCodeToTranslationKey(this.props.bank.code) + "." + e + "." + n, "banks." + e + "." + n, e + "." + n];
                    return t.kind || a.push(n), a
                }, t.prototype.canSubmit = function() {
                    return !this.state.disableAnswer && "success" === this.state.answerState
                }, t.prototype.comboBoxQuestion = function() {
                    var e = this;
                    if (this.props.question.options && this.props.question.options.length) return u.createElement(l.FormGroup, null, c.showComboBox(this.comboboxDescription(), this.convertToComboBoxOptions(), function(t) {
                        return e.saveAnswer(t)
                    }, "", this.state.disableAnswer), this.countdown())
                }, t.prototype.notificationQuestion = function() {
                    if (["APP_LOGIN_REQUEST", "APP_APPROVAL_REQUEST", "CONFIRMATION_REQUEST"].indexOf(this.props.question.kind) >= 0) return u.createElement(l.FormGroup, null, this.countdown())
                }, t.prototype.inputQuestion = function() {
                    var e = this;
                    if (this.props.question.kind && ["CAPTCHA_REQUEST", "OTP_REQUEST"].indexOf(this.props.question.kind) < 0) return null;
                    var t = {
                        name: this.props.question.kind || "SIMPLE_QUESTION",
                        placeholder: this.questionPlaceholder(),
                        type: "TEXT",
                        validations: this.props.question.validations || []
                    };
                    if (!t.validations.length) {
                        this.props.question.size ? t.validations.push({
                            type: "exact_length",
                            length: this.props.question.size
                        }) : t.validations.push({
                            type: "min_length",
                            length: 1
                        });
                        var n = this.props.question.allowAlpha;
                        ("OTP_REQUEST" === this.props.question.kind && !n || "false" === String(n)) && t.validations.push({
                            type: "only_digits"
                        })
                    }
                    var a = [u.createElement(p.InputField, {
                        key: "input",
                        onChange: function(t) {
                            return e.saveAnswer(t)
                        },
                        onInvalid: function() {
                            return e.updateState({
                                answerState: "error"
                            })
                        },
                        field: t,
                        disabled: this.state.disableAnswer
                    }, this.countdown())];
                    return "CAPTCHA_REQUEST" === this.props.question.kind && a.unshift(u.createElement(l.FormGroup, {
                        key: "image"
                    }, u.createElement("img", {
                        className: "captcha",
                        alt: "captcha image",
                        src: "data:image/png;base64, " + this.props.question.image
                    }))), a
                }, t.prototype.comboboxDescription = function() {
                    var e = this;
                    if (this.state.answer) {
                        var t = this.props.question.options.find(function(t) {
                            return String(t.index) === e.state.answer
                        });
                        return this.optionDescription(t)
                    }
                    return i.default.t("questions.ACCOUNT_SELECTION")
                }, t.prototype.optionDescription = function(e) {
                    return this.questionPlaceholderDescription(this.props.question.kind, e)
                }, t.prototype.questionPlaceholderDescription = function(e, t) {
                    var n = ["banks." + this.props.bank.code + ".placeholders." + e, "banks.placeholders." + e, "placeholders." + e];
                    return i.default.t(n, t)
                }, t.prototype.convertToComboBoxOptions = function() {
                    var e = this;
                    return this.props.question.options.map(function(t) {
                        return {
                            label: e.optionDescription(t),
                            value: String(t.index)
                        }
                    })
                }, t.prototype.questionSubmitButton = function() {
                    return ["APP_LOGIN_REQUEST", "APP_APPROVAL_REQUEST"].indexOf(this.props.question.kind) >= 0 ? null : u.createElement(l.Button, {
                        type: "submit",
                        color: "primary",
                        "aria-label": i.default.t("button.verify"),
                        disabled: !this.canSubmit(),
                        className: "btn-lg btn-block mt-auto"
                    }, i.default.t("button.verify"))
                }, t.prototype.countdown = function() {
                    var e = this;
                    if (this.props.question.timeout) return u.createElement(d.Countdown, {
                        date: this.props.question.timeout,
                        onEnd: function() {
                            return e.disableAnswer()
                        }
                    })
                }, t
            }(c.BaseComponent);
        t.QuestionCard = f
    },
    625: function(e, t, n) {
        "use strict";
        var a, r = this && this.__extends || (a = function(e, t) {
                return (a = Object.setPrototypeOf || {
                        __proto__: []
                    }
                    instanceof Array && function(e, t) {
                        e.__proto__ = t
                    } || function(e, t) {
                        for (var n in t) t.hasOwnProperty(n) && (e[n] = t[n])
                    })(e, t)
            }, function(e, t) {
                function n() {
                    this.constructor = e
                }
                a(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n)
            }),
            o = this && this.__importDefault || function(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            },
            s = this && this.__importStar || function(e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var i = o(n(39)),
            u = s(n(1)),
            l = n(66),
            c = n(57),
            d = n(147),
            p = function(e) {
                function t(t) {
                    var n = e.call(this, t) || this;
                    return n.state = n.stateForAuthMode("AUTH_MODE_SELECTION"), n
                }
                return r(t, e), t.prototype.render = function() {
                    var e = this;
                    return u.createElement("div", null, u.createElement("div", {
                        className: "payment-header px-4 pt-0 pb-4 pb-2 mx-auto text-center"
                    }, u.createElement("p", {
                        className: "blue-subtext mb-0"
                    }, i.default.t("message.proceed_to_transfer")), u.createElement("h1", {
                        className: "checkout-amount"
                    }, this.formatAmount(this.props.amount, this.props.bank.currency))), u.createElement("div", {
                        className: "card shadow-card card-bankinfo mx-auto mb-3 required-info"
                    }, u.createElement("div", {
                        className: "card-header"
                    }, u.createElement("div", {
                        className: "bank-logo mx-auto"
                    }, u.createElement("img", {
                        src: this.props.bank.uiConfig.url,
                        alt: this.props.bank.name
                    }))), u.createElement("div", {
                        className: "card-body d-flex flex-column"
                    }, u.createElement("form", {
                        onSubmit: function(t) {
                            return e.onFormSubmit(t)
                        }
                    }, this.renderModesComboBox(), this.renderFields(this.state.fieldsDefinition), u.createElement("div", {
                        className: "d-flex flex-row"
                    }, this.props.backAction && u.createElement("a", {
                        "aria-label": i.default.t("button.back"),
                        tabIndex: -1,
                        className: "btn-lg mt-3 btn-cancel btn btn-secondary",
                        onClick: function() {
                            return e.props.backAction("button")
                        }
                    }, i.default.t("button.back")), u.createElement(l.Button, {
                        type: "submit",
                        color: "primary",
                        "aria-label": i.default.t("button.login"),
                        className: "btn-lg btn-block mt-auto btn-login",
                        disabled: !this.canSubmit()
                    }, i.default.t("button.login")))))))
                }, t.prototype.stateForAuthMode = function(e) {
                    var t = {},
                        n = {},
                        a = [],
                        r = this.props.fieldsDefinition;
                    if (this.props.modesDefinition)
                        if ("AUTH_MODE_SELECTION" === e) r = [];
                        else {
                            var o = this.props.modesDefinition[e];
                            r = this.props.fieldsDefinition.filter(function(e) {
                                return o.indexOf(e.name) >= 0
                            }), t.mode = e, n.mode = "success"
                        } for (var s = 0, i = r; s < i.length; s++) {
                        var u = i[s];
                        "INFO" !== u.type && (a.push(u), t[u.name] = "", n[u.name] = "")
                    }
                    return {
                        fields: t,
                        fieldsDefinition: r,
                        fieldsState: n,
                        inputFieldsDefinition: a,
                        mode: e
                    }
                }, t.prototype.canSubmit = function() {
                    var e = Object.entries(this.state.fieldsState),
                        t = e.filter(function(e) {
                            return "success" !== e[1]
                        });
                    return 0 !== e.length && 0 === t.length
                }, t.prototype.onFormSubmit = function(e) {
                    e.preventDefault(), this.canSubmit() && this.props.postFieldsForPayment(this.state.fields)
                }, t.prototype.saveFieldValue = function(e, t) {
                    var n, a, r = Object.assign({}, this.state.fields, ((n = {})[e] = t, n)),
                        o = Object.assign({}, this.state.fieldsState, ((a = {})[e] = "success", a));
                    this.updateState({
                        fields: r,
                        fieldsState: o
                    })
                }, t.prototype.setInvalidState = function(e) {
                    var t, n = Object.assign({}, this.state.fieldsState, ((t = {})[e] = "error", t));
                    this.updateState({
                        fieldsState: n
                    })
                }, t.prototype.optionDescription = function(e) {
                    return i.default.t(this.translationsKeys(e, !0))
                }, t.prototype.convertModesToOptions = function() {
                    var e = this;
                    return Object.entries(this.props.modesDefinition).map(function(t) {
                        var n = t[0];
                        t[1];
                        return {
                            label: e.optionDescription(n),
                            value: n
                        }
                    })
                }, t.prototype.selectMode = function(e) {
                    var t = this.stateForAuthMode(e);
                    return this.updateState(t)
                }, t.prototype.renderModesComboBox = function() {
                    var e = this;
                    if (this.props.modesDefinition) return c.showComboBox(this.optionDescription(this.state.mode), this.convertModesToOptions(), function(t) {
                        return e.selectMode(t)
                    }, "auth-mode")
                }, t.prototype.renderFields = function(e) {
                    var t = this;
                    return e.map(function(e) {
                        return t.renderField(e)
                    })
                }, t.prototype.renderField = function(e) {
                    var t = this,
                        n = i.default.t(this.translationsKeys(e.name));
                    if ("INFO" === e.type) return u.createElement("div", {
                        key: e.name,
                        className: "d-flex flex-row"
                    }, u.createElement("span", null, n));
                    var a = Object.assign({}, e, {
                        placeholder: n
                    });
                    return e.validations || (a.validations = [{
                        type: "min_length",
                        length: 1
                    }]), u.createElement(d.InputField, {
                        key: e.name,
                        onChange: function(n) {
                            return t.saveFieldValue(e.name, n)
                        },
                        onInvalid: function() {
                            return t.setInvalidState(e.name)
                        },
                        field: a
                    })
                }, t.prototype.translationsKeys = function(e, t) {
                    void 0 === t && (t = !1);
                    var n = ["banks." + this.bankCodeToTranslationKey(this.props.bank.code) + ".auth." + e, "banks.auth." + e];
                    return t && n.unshift("placeholders." + e), n
                }, t
            }(c.BaseComponent);
        t.PaymentRequiredInformation = p
    },
    636: function(e) {
        e.exports = {
            banks: {
                auth: {
                    bank_id: "BankID with token",
                    login: "User Name",
                    mobile: "Mobile phone number",
                    mobile_bank_id: "BankID Mobile",
                    password: "Password",
                    transaction_password: "Transaction Password",
                    sms: "SMS"
                },
                AKBKTRIS: {
                    auth: {
                        login: "Customer / T.R. ID Number",
                        password: "Akbank Direkt Password"
                    }
                },
                BBDEBRSP: {
                    auth: {
                        branch_code: "Branch code",
                        login: "Account number",
                        password: "Password"
                    }
                },
                BRASBRRJ: {
                    auth: {
                        branch_code: "Branch code",
                        login: "Account number",
                        password: "Online banking password",
                        transaction_password: "6 digits password"
                    }
                },
                BSCHBRSP: {
                    auth: {
                        login: "CPF",
                        password: "Online banking password"
                    }
                },
                CEFXBRSP: {
                    auth: {
                        login: "Username",
                        password: "Online banking password",
                        transaction_password: "Electronic Signature"
                    }
                },
                DENITRIS: {
                    auth: {
                        login: "User Name / TR ID",
                        password: "Password"
                    }
                },
                DNBANOKK: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    },
                    questions: {
                        CHANGE_PAYMENT_SETTINGS: "In order to perform the payment it is necessary to change your 'Payment Settings' to 'Immediate payment'.<br/>Please confirm?"
                    }
                },
                FNNBTRIS: {
                    auth: {
                        login: "Customer / Your TR ID Number",
                        password: "Your FinansPassword"
                    }
                },
                HDFCINBB: {
                    questions: {
                        ADDITIONAL_CONFIRMATION_CODE_REQUEST: "{{question}}"
                    }
                },
                ICICINBB: {
                    auth: {
                        login: "User ID",
                        password: "Password"
                    },
                    questions: {
                        ADDITIONAL_CONFIRMATION_CODE_REQUEST: "Please enter the following digits of your Debit Grid: '{{letters}}' like: 'XXXXXX'"
                    }
                },
                INGBTRIS: {
                    auth: {
                        login: "User Code / TC Id No",
                        password: "PIN"
                    }
                },
                ITAUBRSP: {
                    auth: {
                        branch_code: "Branch code",
                        login: "Account number",
                        password: "Electronic password",
                        transaction_password: "Card password"
                    }
                },
                ISBKTRIS: {
                    auth: {
                        login: "Customer No / T.C. / Foreigners ID",
                        password: "PIN / Temporary PIN"
                    }
                },
                KTEFTRIS: {
                    auth: {
                        login: "Customer No/T.R. Identity No",
                        password: "Password"
                    }
                },
                NDEANOKK: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    },
                    questions: {
                        CHANGE_PAYMENT_SETTINGS: "In order to perform the payment it is necessary to change your 'Payment Settings' to 'Immediate payment'.<br/>Please confirm?"
                    }
                },
                NORVNO21: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SBAKNOBB: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SGFSNO21: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SHEDNO22: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SNOWNO22: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SPRONO22: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SPTRNO22: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                TCZBTR2A: {
                    auth: {
                        login: "Customer Number / TR Identity Number",
                        password: "Password"
                    }
                },
                TEBUTRIS: {
                    auth: {
                        login: "User ID/Name/TR ID Number",
                        password: "PIN"
                    }
                },
                TGBATRIS: {
                    auth: {
                        login: "Customer/TC Identity Number",
                        password: "Password"
                    },
                    questions: {
                        ADDITIONAL_CONFIRMATION_CODE_REQUEST: "Enter 'Additional Confirmation Code' from 'Cep Şifrematik' app for value 1 '{{entryValue1}}' and value 2 '{{entryValue2}}':"
                    }
                },
                TRHBTR2A: {
                    auth: {
                        login: "Customer/TC Identity Number",
                        password: "Password"
                    }
                },
                TVBATR2A: {
                    auth: {
                        login: "Customer / T.R. Identity Number",
                        password: "Internet Password"
                    }
                },
                YAPITRIS: {
                    auth: {
                        login: "TR ID Number or User ID",
                        password: "Internet and Mobile Banking Password"
                    }
                }
            },
            button: {
                yes: "Yes",
                no: "No",
                complete: "Complete",
                select: "Select",
                select_amount: "Select Amount",
                back: "Back",
                cancel: "Cancel",
                login: "Login",
                show_link: "Show link",
                try_again: "Try again",
                verify: "Verify"
            },
            language: {
                en: "English",
                no: "Norsk",
                pt: "Portuguese",
                tr: "Türkçe"
            },
            message: {
                hours_countdown: "{{hours}}:{{minutes}}:{{seconds}}",
                transfer_canceled: "Transfer was canceled",
                amount_available: "{{count}} amounts available at the moment",
                amounts_found: "{{count}} amount(s) found",
                collection_incorrect_status: "Collection in incorrect status: {{status}}",
                communication_error: "Error while processing the request.",
                loading: "Loading ...",
                more_amounts: "+ {{count}} more",
                no_amount_available: "No amounts available at the moment",
                no_banks_available: "No available amounts for collection. Please try again later",
                proceed_to_transfer: "Proceed to transfer",
                process_cleared_info: "Please complete the transaction.",
                process_clearing_info: "Please come back when time out to complete the transaction.",
                process_duration_info: "This transaction may take up to 5 minutes to be completed.",
                process_error: "There was an error while processing your transaction. Try again now or wait a few minutes.",
                process_success: "The transaction was successful!",
                processing: "Processing ...",
                remaining_time: "Remaining time: {{minutes}}:{{seconds}}",
                select_amount: "Select amount",
                select_bank: "Select bank",
                select_bank_name: "Select {{name}}",
                unknown_error: "Unknown error"
            },
            reasons: {
                ACCOUNT_BALANCE_BLOCKED: "Your transaction cannot be processed because the balance on your account is blocked. Please contact you bank and try again after releasing it.",
                ACCOUNT_QUESTION_TIMEOUT_ERROR: "Your transaction cannot be processed because you did not select a source account within the allocated time. Please try again and select an account for performing your transaction.",
                ACCOUNTS_DATA_INVALID: "Transfer amount plus transaction fee is bigger than your bank account(s) balance.",
                AMOUNT_OVER_TRANSACTION_LIMIT: "Amount is over your transaction limit.",
                APPROVE_APP_DENIED_ERROR: "Your transaction cannot be processed because you rejected it using the mobile application.",
                APPROVE_APP_TIMEOUT_ERROR: "Your transaction cannot be processed because you did not approve your transaction within the allocated time using the mobile application.",
                APPROVE_OTP_TIMEOUT_ERROR: "Your transaction cannot be processed because you did not provide the code (OTP) within the allocated time.",
                BENEFICIARY_ADDED: "Your transaction is going in a clearing process before be possible to complete due to the requirement of adding a new beneficiary.",
                CHANGE_SETTINGS_DENIED_ERROR: "Your transaction cannot be processed because you rejected the change payment settings request.",
                CHANGE_SETTINGS_TIMEOUT_ERROR: "Your transaction cannot be processed because you did not approve the change payment settings request within the allocated time.",
                DEVICE_ACTIVATION_PENDING_ERROR: "The device is pending to be activated",
                DEVICE_REGISTRATION_NEEDED_ERROR: "The device '{{computerName}}' needs to be activated to register it for transactions",
                ERROR_DURING_APPROVING_PAYMENT: "Your payment is being processed. Please note it may take up to 24 hours to be fully completed.\nIf you see on your bank account that you have been debited and the payment is still showing as in process, then please send a copy of your bank statement to the Customer Support team for further investigation.",
                ERROR_DURING_LOGIN: "Was not able to complete the login. Please try again.",
                ERROR_DURING_PROCESSING_PAYMENT: "Error while validating payment.",
                ERROR_PROCESSING_PAYMENT: "Error while validating payment.",
                INSUFFICIENT_FUNDS: "Transfer amount plus transaction fee is bigger than your bank account(s) balance.",
                INVALID_CONF_TO_PAY_OVER_INTERNET_BANKING: "Your transaction cannot be processed because you do not have an available account. Please login to the online bank system and check you have an available account in the transaction currency and the security configurations for transactions. Please logout and try again.",
                INVALID_RECEIVER_ACCOUNT: "Payment cannot be fulfilled. Please start the process again.",
                LOGIN_APP_DENIED_ERROR: "Your transaction cannot be processed because you rejected it using the mobile application.",
                LOGIN_APP_ERROR: "Your transaction cannot be processed because you did not approve your transaction within the allocated time using the mobile application.",
                LOGIN_APP_TIMEOUT_ERROR: "Your transaction cannot be processed because you did not approve your transaction within the allocated time using the mobile application.",
                MULTIPLE_TOKENS_ERROR: "Multiple tokens detected. Please try again selecting the BankID Mobile option to login.",
                NO_ACCOUNTS_DATA: "Transfer amount plus transaction fee is bigger than your bank account(s) balance.",
                ONLINE_ACCESS_ERROR: "Please login to your online bank system and verify any issue preventing the usage, logout and try again.",
                OTP_LIMIT_ERROR: "Reached the limit of sending OTP. Wait few minutes and try again.",
                OTP_TIMEOUT_ERROR: "Your transaction cannot be processed because you did not provide the code (OTP) within the allocated time.",
                OTP_VALIDATION_ERROR: "Your transaction cannot be processed because the provided code (OTP) was denied by the bank.",
                OTP_WRONG_SIZE: "Your transaction cannot be processed because the provided code (OTP) has a wrong size.",
                OVER_ADD_BENEFICIARY_LIMIT_ERROR: "Your transaction cannot be processed because you reached the bank limit for adding beneficiaries",
                OWN_ACCOUNT_ERROR: "Transfer between own accounts is not allowed. Please select a different amount.",
                PASSWORD_CHANGE_REQUIRED: "Please login to your online bank system and change your password, logout and try again.",
                PASSWORD_OR_LOGIN_BLOCKED: "User or password failed. Check the access to your internet bank system.",
                PASSWORD_OR_LOGIN_INVALID: "You entered the wrong bank login credentials. Please check and try again.",
                PASSWORD_OR_LOGIN_INVALID_MANY_TIMES: "Too many attempts with wrong credentials. Please login to your online bank system, logout and try again.",
                PAYMENT_PENDING_APPROVAL_ERROR: "Your transaction cannot be processed because you have at least one payment pending approval. Please login to your online bank, delete or complete the pending payments, logout and try again.",
                PAYMENT_SAME_CREDENTIALS_ALREADY_IN_PROCESS: "There is another payment in process with the same credentials. Please, wait until it finish before starting a new one.",
                PAYMENT_SUSPENDED_DUE_TO_TECHNICAL_REASONS: "Your payment can't be processed for technical reasons.\nYou will not be able to perform future payments until {{time}}.\nPlease try again after {{time}}.",
                POTENTIALLY_DUPLICATED_PAYMENT: "There is a similar payment recently processed. Please check your statement and contact support if needed.",
                SCHEDULE_PAYMENT_NOT_ALLOWED_ERROR: "Your transaction cannot be processed at this time please try again within the banks business hours",
                SECURITY_1H_INTERVAL_ERROR: "Due to security settings, your bank requests a 1-hour interval before trying to perform the payment again. Please try again in 1 hour.",
                SECURITY_IMAGE_NOT_SET_ERROR: "Please login to your online bank system, choose a security image, logout and try again.",
                SIMULTANEOUS_ACCESS_ERROR: "Please wait until the process is completed before accessing your account via your mobile app or online bank system.",
                TEMPORARILY_UNAVAILABLE_ERROR: "Your selected bank is temporarily unavailable. Please try again within minutes.",
                UNEXPECTED_ERROR: "An unexpected error happened. Please try again.",
                UNREAD_MESSAGES: "Please login to your online bank and mark any pending message as read, logout and try again.",
                VALIDATE_FORM_ERROR: "An unexpected validation error happened. Please try again."
            },
            questions: {
                APP_LOGIN_REQUEST: "Your login to Internet Banking has been started. <b>Please authorize access via mobile application</b>.",
                APP_APPROVAL_REQUEST: "In order to make your transaction, you have to <b>give approval via mobile application</b>.",
                ACCOUNT_SELECTION: "Select account",
                CAPTCHA_REQUEST: "Please enter the following text in the box below",
                OTP_REQUEST: "Enter code (received by SMS or generated by token/mobile application)"
            },
            placeholders: {
                ACCOUNT_SELECTION: "Account '{{accountId}}' with balance {{balance}}",
                AUTH_MODE_SELECTION: "Select authentication mode",
                CAPTCHA_REQUEST: "Enter the text",
                FILTER_AMOUNT: "Filter amount",
                OTP_REQUEST: "Enter code with {{size}} digits"
            },
            validations: {
                feedback: {
                    exact_length: "Enter exactly {{length}} character(s)",
                    exact_length_digits: "Enter exactly {{length}} number(s)",
                    min_length: "Enter minimum {{length}} character(s)",
                    min_length_digits: "Enter minimum {{length}} number(s)",
                    norwegian_birth_number: "Entered value is not a valid Norwegian birth number",
                    only_digits: "Enter only numbers",
                    TKCN_number: "Entered value is not a valid TKCN"
                }
            },
            status: {
                verification: "Verification",
                canceled: "Canceled",
                created: "Created",
                expired: "Expired",
                failure: "Failure",
                linked: "Linked",
                success: "Success"
            }
        }
    },
    637: function(e) {
        e.exports = {
            banks: {
                auth: {
                    bank_id: "BankID med kodebrikke",
                    login: "Fødselsnummer (med 11 siffer)",
                    mobile: "Mobilnummer",
                    mobile_bank_id: "BankID på Mobil",
                    password: "Passord",
                    sms: "SMS"
                },
                AKBKTRIS: {
                    auth: {
                        login: "Customer / T.R. ID Number",
                        password: "Akbank Direkt Password"
                    }
                },
                DENITRIS: {
                    auth: {
                        login: "User Name / TR ID",
                        password: "Password"
                    }
                },
                DNBANOKK: {
                    auth: {
                        login: "Fødselsnummer (med 11 siffer)",
                        password: "Passord"
                    },
                    questions: {
                        CHANGE_PAYMENT_SETTINGS: "For at betalingen kan gjennomføres må du endre 'Betalingsinnstillinger' til umiddelbar betaling.<br/>Vennligst bekreft at dette er gjort."
                    }
                },
                FNNBTRIS: {
                    auth: {
                        login: "Customer / Your TR ID Number",
                        password: "Your FinansPassword"
                    }
                },
                INGBTRIS: {
                    auth: {
                        login: "User Code / TC Id No",
                        password: "PIN"
                    }
                },
                ISBKTRIS: {
                    auth: {
                        login: "Customer No / T.C. / Foreigners ID",
                        password: "PIN / Temporary PIN"
                    }
                },
                KTEFTRIS: {
                    auth: {
                        login: "Customer No/T.R. Identity No",
                        password: "Password"
                    }
                },
                NDEANOKK: {
                    auth: {
                        login: "Fødselsnummer (med 11 siffer)",
                        password: "Passord"
                    },
                    questions: {
                        CHANGE_PAYMENT_SETTINGS: "For at betalingen kan gjennomføres må du endre 'Betalingsinnstillinger' til umiddelbar betaling.<br/>Vennligst bekreft at dette er gjort."
                    }
                },
                NORVNO21: {
                    auth: {
                        login: "Fødselsnummer (med 11 siffer)",
                        password: "Passord"
                    }
                },
                SBAKNOBB: {
                    auth: {
                        login: "Fødselsnummer (med 11 siffer)",
                        password: "Passord"
                    }
                },
                SGFSNO21: {
                    auth: {
                        login: "Fødselsnummer (med 11 siffer)",
                        password: "Passord"
                    }
                },
                SHEDNO22: {
                    auth: {
                        login: "Fødselsnummer (med 11 siffer)",
                        password: "Passord"
                    }
                },
                SNOWNO22: {
                    auth: {
                        login: "Fødselsnummer (med 11 siffer)",
                        password: "Passord"
                    }
                },
                SPRONO22: {
                    auth: {
                        login: "Fødselsnummer (med 11 siffer)",
                        password: "Passord"
                    }
                },
                SPTRNO22: {
                    auth: {
                        login: "Fødselsnummer (med 11 siffer)",
                        password: "Passord"
                    }
                },
                TCZBTR2A: {
                    auth: {
                        login: "Customer Number / TR Identity Number",
                        password: "Password"
                    }
                },
                TEBUTRIS: {
                    auth: {
                        login: "User ID/Name/TR ID Number",
                        password: "PIN"
                    }
                },
                TGBATRIS: {
                    auth: {
                        login: "Customer/TC Identity Number",
                        password: "Password"
                    },
                    questions: {
                        ADDITIONAL_CONFIRMATION_CODE_REQUEST: "Enter 'Additional Confirmation Code' from 'Cep Şifrematik' app for value 1 '{{entryValue1}}' and value 2 '{{entryValue2}}':"
                    }
                },
                TRHBTR2A: {
                    auth: {
                        login: "Customer/TC Identity Number",
                        password: "Password"
                    }
                },
                TVBATR2A: {
                    auth: {
                        login: "Customer / T.R. Identity Number",
                        password: "Internet Password"
                    }
                },
                YAPITRIS: {
                    auth: {
                        login: "TR ID Number or User ID",
                        password: "Internet and Mobile Banking Password"
                    }
                }
            },
            button: {
                yes: "Ja",
                no: "Nei",
                select: "Velg",
                select_amount: "Velg beløp",
                back: "Tilbake",
                cancel: "Avbryt",
                login: "Logg inn",
                try_again: "Prøv igjen",
                verify: "Godkjenn"
            },
            language: {
                en: "English",
                no: "Norsk",
                pt: "Portuguese",
                tr: "Türkçe"
            },
            message: {
                transfer_canceled: "Overføring mislyktes",
                amount_available: "{{count}} tilgjengelig",
                amounts_found: "{{count}} beløp funnet",
                collection_incorrect_status: "Følgende feel oppstod: {{status}}",
                communication_error: "Det oppsto en feil under behandling av forespørselen",
                loading: "Laster ...",
                more_amounts: "+ {{count}} flere",
                no_amount_available: "Ingen penger tilgjengelig for utbetaling",
                no_banks_available: "Ingen penger tilgjengelig for utbetaling. Vennligst prøv igjen litt senere",
                proceed_to_transfer: "Gå videre til overførsel",
                process_duration_info: "Denne overførselen kan ta opp til 5 minutter før den er gjennomført.",
                process_error: "Det oppsto en feil under behandling av overførselen. Vennligst prøv igjen om noen minutter.",
                process_success: "Overføreselen er gjennomført",
                processing: "Behandler ...",
                remaining_time: "Tid tilbake: {{minutes}}:{{seconds}}",
                select_amount: "Velg beløp",
                select_bank: "Velg bank",
                select_bank_name: "Velg {{name}}",
                unknown_error: "Ukjent feil"
            },
            reasons: {
                ACCOUNT_BALANCE_BLOCKED: "Overførselen kan ikke gjennomføres da adgangen til din konto er sperret. Vennligst kontakt banken din.",
                ACCOUNT_QUESTION_TIMEOUT_ERROR: "Overførselen kan ikke gjennomføres da du ikke valgte en konto innen tiden utløp. Vennligst prøv igjen og velg en konto å overføre fra.",
                ACCOUNTS_DATA_INVALID: "Det er ikke dekning for valgt beløp til overførsel på din konto.",
                AMOUNT_OVER_TRANSACTION_LIMIT: "Beløpet er over maksbeløpet på din konto.",
                APPROVE_APP_DENIED_ERROR: "Overførselen kan ikke gjennomføres fordi du trykket på 'Avbryt' i BankID Mobil.",
                APPROVE_APP_TIMEOUT_ERROR: "Overførselen kan ikke gjennomføres fordi du ikke godkjente beløpet innen tidsfristen i BankID Mobil.",
                APPROVE_OTP_TIMEOUT_ERROR: "Overførselen kan ikke gjennomføres fordi du ikke tastet inn koden fra din kodebrikke.",
                CHANGE_SETTINGS_DENIED_ERROR: "Overførselen kan ikke gjennomføres fordi du ikke godkjente endringer i betalingsinnstillinger",
                CHANGE_SETTINGS_TIMEOUT_ERROR: "Overførselen kan ikke gjennomføres fordi du ikke godkjente endringer i betalingsinnstillinger innen tidsfristen",
                ERROR_DURING_APPROVING_PAYMENT: "Betalingen din blir behandlet. Det kan ta opp til 24 timer før den er gjennomført.\nHvis beløpet er trukket fra bankkontoen din og betalingen fremdeles står som 'Under behandling', ber vi deg sende en kontoutskrift til kundeservice.",
                ERROR_DURING_LOGIN: "Kunne ikke logge inn. Vennligst prøv igjen.",
                ERROR_DURING_PROCESSING_PAYMENT: "Feil ved godkjennelse av overførsel.",
                ERROR_PROCESSING_PAYMENT: "Feil ved godkjenning av overførsel.",
                INSUFFICIENT_FUNDS: "Det er ikke dekning for valgt beløp til overførsel på din konto.",
                INVALID_CONF_TO_PAY_OVER_INTERNET_BANKING: "Din overførsel kan ikke gjennomføres fordi du ikke har en tilknyttet konto i din nettbank. Vennligst logg inn igjen i din nettbank og sjekk at du har en konto tilgjengelig . Logg ut og prøv igjen.",
                INVALID_RECEIVER_ACCOUNT: "Overførsel kan ikke gjennomføres. Vennligst start forfra.",
                LOGIN_APP_DENIED_ERROR: "Overførselen kan ikke gjennomføres fordi du ikke godkjente beløpet innen tidsfristen i BankID Mobil.",
                LOGIN_APP_ERROR: "Overførselen kan ikke gjennomføres fordi du ikke godkjente beløpet innen tidsfristen i BankID Mobil.",
                LOGIN_APP_TIMEOUT_ERROR: "Overførselen kan ikke gjennomføres fordi du ikke godkjente beløpet innen tidsfristen i BankID Mobil.",
                MULTIPLE_TOKENS_ERROR: "Flere antall kodebrikker identifisert. Prøv igjen og velg BankID Mobil for å logge inn.",
                NO_ACCOUNTS_DATA: "Det er ikke dekning for valgt beløp til overførsel på din konto.",
                ONLINE_ACCESS_ERROR: "Det skjedde en feil ved innloggin i din nettbank. Vennligst logg ut og prøv å logge inn på nytt.",
                OTP_LIMIT_ERROR: "Vennligst vent noen minutter og prøv å logge inn med kodebrikken igjen.",
                OTP_TIMEOUT_ERROR: "Overførselen kan ikke gjennomføres fordi du ikke taste innt koden fra din kodebrikke innen tidsfristen.",
                OTP_VALIDATION_ERROR: "Overførselen kan ikke gjennomføres fordi koden fra din kodebrikke ikke ble godkjent av din bank.",
                OTP_WRONG_SIZE: "Sjekk at du har taste innt riktig kode.",
                OWN_ACCOUNT_ERROR: "Overføring mellom egne kontoer er ikke tillatt. Vennligst velg et annet beløp.",
                PASSWORD_CHANGE_REQUIRED: "Vennligst logg inn I din netbank og endre ditt passord. Logg så ut og logg inn på nytt.",
                PASSWORD_OR_LOGIN_BLOCKED: "Brukernavn og passord ikke godkjent. Vennligst prøv å logge inn i nettbank på nytt.",
                PASSWORD_OR_LOGIN_INVALID: "Du taste innt feil brukernavn eller passord. Vennligst prøv igjen.",
                PASSWORD_OR_LOGIN_INVALID_MANY_TIMES: "Du har forsøkt å logge inn for mange ganger.",
                PAYMENT_PENDING_APPROVAL_ERROR: "Din overførsel kan ikke godkjennes da du hart en betaling som avventer godkjenning. Logg inn i din nettbank og godkjenn denne betalingen før du prøver på nytt.",
                PAYMENT_SAME_CREDENTIALS_ALREADY_IN_PROCESS: "Du har allerede en overførsel som venter på å bli gjennomført. Vennligst vent til denne er bekreftet før du starter en ny overførsel.",
                SCHEDULE_PAYMENT_NOT_ALLOWED_ERROR: "Overførselen kan ikke gjennomføres. Vennligst prøv igjen i bankens åpningstid.",
                SECURITY_1H_INTERVAL_ERROR: "På grunn av sikkerhet krever banken din at du venter i 1 time innen du prøver på nytt igjen.",
                SECURITY_IMAGE_NOT_SET_ERROR: "Vennligst logg inn i din nettbank, velg et sikkerhetsbilde, logg ut ut og prøv så igjen.",
                SIMULTANEOUS_ACCESS_ERROR: "Vennligst vent med på logge inn i nettbank eller mobilbank til overførselen er gjennomført.",
                TEMPORARILY_UNAVAILABLE_ERROR: "Den valgte bank er ikke tilgjengelig i øyeblikket. Vennligst vent senere.",
                UNEXPECTED_ERROR: "En uventet feil har oppstått. Vennligst prøv igjen senere.",
                UNREAD_MESSAGES: "Vennligst logg inn i din nettbank, velg alle meldinger som lest og prøv så igjen.",
                VALIDATE_FORM_ERROR: "En uventet validerings feil har oppstått. Vennligst prøv igjen senere."
            },
            questions: {
                APP_LOGIN_REQUEST: "Innlogging til din nettbank er i gang <b>Vennligst godkjenn via Bank ID Mobil.</b>.",
                APP_APPROVAL_REQUEST: "For at overførselen skal gjennomføres må du <b>godkjenne via Bank ID Mobil.</b>.",
                ACCOUNT_SELECTION: "Velg beløp",
                CAPTCHA_REQUEST: "Skriv inn følgende tekst i feltet nedenfor",
                OTP_REQUEST: "Inntast kode (fra SMS eller kodebrikke)"
            },
            placeholders: {
                ACCOUNT_SELECTION: "Beløp '{{accountId}}' med saldo {{balance}}",
                AUTH_MODE_SELECTION: "Velg autentisering",
                CAPTCHA_REQUEST: "Skriv inn tekst",
                FILTER_AMOUNT: "Filtrer beløp",
                OTP_REQUEST: "Inntast kode med {{size}} siffer"
            },
            validations: {
                feedback: {
                    exact_length: "Skriv inn nøyaktig {{length}} tegn",
                    exact_length_digits: "Skriv inn nøyaktig {{length}} tall",
                    min_length: "Skriv inn minimum {{length}} tegn",
                    min_length_digits: "Skriv inn minimum {{length}} tall",
                    norwegian_birth_number: "Nummeret du har inntastet er ikke et gyldig personnummer",
                    only_digits: "Skriv kun tall",
                    TKCN_number: "Nummeret du har inntastet er ikke et gyldig TKCN"
                }
            },
            status: {
                verification: "Godkjennelse",
                canceled: "Avbrutt",
                created: "Opprettet",
                expired: "Utløpt",
                failure: "Feilet",
                linked: "Lenket",
                success: "Gjennomført"
            }
        }
    },
    638: function(e) {
        e.exports = {
            banks: {
                auth: {
                    login: "Usuário",
                    password: "Senha"
                },
                BBDEBRSP: {
                    auth: {
                        branch_code: "Agência",
                        login: "Conta",
                        password: "Senha"
                    }
                },
                BRASBRRJ: {
                    auth: {
                        branch_code: "Agência",
                        login: "Conta",
                        password: "Senha de autoatendimento",
                        transaction_password: "Senha de 6 dígitos"
                    }
                },
                BSCHBRSP: {
                    auth: {
                        login: "CPF",
                        password: "Senha de acesso"
                    }
                },
                CEFXBRSP: {
                    auth: {
                        login: "Usuário",
                        password: "Senha internet",
                        transaction_password: "Assinatura eletrônica"
                    }
                },
                ITAUBRSP: {
                    auth: {
                        branch_code: "Agência",
                        login: "Conta",
                        password: "Senha eletrônica",
                        transaction_password: "Senha do cartão"
                    }
                }
            },
            button: {
                yes: "Sim",
                no: "Não",
                complete: "Completo",
                select: "Selecione",
                select_amount: "Selecione Valor",
                back: "Voltar",
                cancel: "Cancelar",
                login: "Login",
                show_link: "Mostrar link",
                try_again: "Tentar novamente",
                verify: "Verificar"
            },
            language: {
                en: "English",
                no: "Norsk",
                pt: "Portuguese",
                tr: "Türkçe"
            },
            message: {
                hours_countdown: "{{hours}}:{{minutes}}:{{seconds}}",
                transfer_canceled: "A transferência foi cancelada.",
                amount_available: "{{count}} valor disponível no momento",
                amount_available_plural: "{{count}} valores disponíveis no momento",
                amounts_found: "{{count}} valor encontrado",
                amounts_found_plural: "{{count}} valores encontrados",
                collection_incorrect_status: "Depósito em status incorreto: {{status}}",
                communication_error: "Desculpe, ocorreu um erro ao processar sua requisição.",
                loading: "Carregando ...",
                more_amounts: "+ {{count}} mais",
                no_amount_available: "Nenhum valor disponível no momento.",
                no_banks_available: "Nenhum valor disponível para depósito. Por favor, tente novamente mais tarde.",
                proceed_to_transfer: "Seguir para transferência",
                process_cleared_info: "Por favor, complete a transação.",
                process_clearing_info: "Período requisitado pelo sistema do seu banco. Por favor, retorne para completar sua transação quando o tempo do processo for concluído.",
                process_duration_info: "Esta transação pode levar até 5 minutos para ser concluída.",
                process_error: "Desculpe, ocorreu um erro ao processar sua transação. Tente novamente ou aguarde alguns minutos.",
                process_success: "A transação foi efetuada com sucesso!",
                processing: "Processando ...",
                remaining_time: "Tempo restante: {{minutes}}:{{seconds}}",
                select_amount: "Selecione o valor",
                select_bank: "Selecione seu banco",
                select_bank_name: "Selecione {{name}}",
                unknown_error: "Desculpe, ocorreu um erro inesperado."
            },
            reasons: {
                ACCOUNT_BALANCE_BLOCKED: "Sua transação não pôde ser processada. O saldo em sua conta está bloqueado. Por favor, entre em contato com o seu banco para desbloquear e tente novamente.",
                ACCOUNT_QUESTION_TIMEOUT_ERROR: "Sua transação não pôde ser processada. Nenhuma conta foi selecionada no tempo disponível. Por favor, tente novamente e selecione uma conta para realizar a transação.",
                ACCOUNTS_DATA_INVALID: "Sua transação não pôde ser processada. O valor da transferência mais tarifas é superior ao seu saldo disponível.",
                AMOUNT_OVER_TRANSACTION_LIMIT: "Sua transação não pôde ser processada. Valor está acima do seu limite para transações.",
                APPROVE_APP_DENIED_ERROR: "Sua transação não pôde ser processada. A operação foi rejeitada por você no aplicativo do seu banco.",
                APPROVE_APP_TIMEOUT_ERROR: "Sua transação não pôde ser processada. Infelizmente, você não a aprovou no tempo disponível utilizando o aplicativo do seu banco.",
                APPROVE_OTP_TIMEOUT_ERROR: "Sua transação não pôde ser processada porque você não forneceu o código (OTP) no tempo disponível.",
                BENEFICIARY_ADDED: "Sua transação irá para um processo de validação antes que seja possível completá-la devido a necessidade de adicionar um novo beneficiário.",
                CHANGE_SETTINGS_DENIED_ERROR: "Sua transação não pôde ser processada porque você rejeitou a requisição para alterar as configurações de pagamento em sua conta bancária.",
                CHANGE_SETTINGS_TIMEOUT_ERROR: "Sua transação não pôde ser processada porque você não aprovou a requisição para alterar as configurações de pagamento em sua conta bancária no tempo disponível.",
                DEVICE_ACTIVATION_PENDING_ERROR: "Seu computador está com a ativação pendente. Por favor, acesse o Internet Banking do seu banco e habilite o computador para processar transações.",
                DEVICE_REGISTRATION_NEEDED_ERROR: "Seu computador precisa ser habilitado. Por favor, acesse o Internet Banking do seu banco e habilite o computador '{{computerName}}' para processar transações.",
                ERROR_DURING_APPROVING_PAYMENT: "Seu pagamento está sendo processado. Este processo pode levar até 24 horas para ser concluído.\nCaso a transação já tenha sido debitada em sua conta, entre em contato com o SAC e envie uma cópia do seu extrato bancário para verificação.",
                ERROR_DURING_LOGIN: "Não foi possível completar o seu login. Por favor, tente novamente.",
                ERROR_DURING_PROCESSING_PAYMENT: "Desculpe, ocorreu um erro ao validar o pagamento.",
                ERROR_PROCESSING_PAYMENT: "Desculpe, ocorreu um erro ao validar o pagamento.",
                INSUFFICIENT_FUNDS: "Sua transação não pôde ser processada. O valor da transferência mais tarifas é superior ao seu saldo disponível.",
                INVALID_CONF_TO_PAY_OVER_INTERNET_BANKING: "Sua transação não pôde ser processada. Infelizmente, você não possui uma conta disponível. Por favor, acesse o seu Internet Banking e verifique se possui uma conta disponível na moeda da transação e se as configurações de segurança para realizar transações estão corretas. Tente novamente mais tarde.",
                INVALID_RECEIVER_ACCOUNT: "Sua transação não pôde ser processada. Por favor, inicie o processo novamente.",
                LOGIN_APP_DENIED_ERROR: "Sua transação não pôde ser processada. A operação foi rejeitada por você no aplicativo do seu banco.",
                LOGIN_APP_ERROR: "Sua transação não pôde ser processada. Infelizmente, você não a aprovou no tempo disponível utilizando o aplicativo do seu banco.",
                LOGIN_APP_TIMEOUT_ERROR: "Sua transação não pôde ser processada. Infelizmente, você não a aprovou no tempo disponível utilizando o aplicativo do seu banco.",
                MULTIPLE_TOKENS_ERROR: "Múltiplos tokens identificados. Por favor, tente novamente e selecione a opção BankID Mobile para efetuar o login.",
                NO_ACCOUNTS_DATA: "Sua transação não pôde ser processada. O valor da transferência mais tarifas é superior ao seu saldo disponível.",
                ONLINE_ACCESS_ERROR: "Ocorreu um erro no seu acesso online. Por favor, faça login no seu Internet Banking, verifique qualquer questão que possa estar impedindo a transação, se desconecte do banco e tente novamente.",
                OTP_LIMIT_ERROR: "O limite de envio de OTP foi alcançado. Aguarde alguns minutos e tente novamente.",
                OTP_TIMEOUT_ERROR: "Sua transação não pôde ser processada porque você não forneceu o código (OTP) no tempo disponível.",
                OTP_VALIDATION_ERROR: "Sua transação não pôde ser processada porque o código (OTP) fornecido foi rejeitado pelo seu banco.",
                OTP_WRONG_SIZE: "Sua transação não pôde ser processada. A quantidade de caracteres do código (OTP) fornecido está incorreta.",
                OVER_ADD_BENEFICIARY_LIMIT_ERROR: "Sua transação não pôde ser processada porque você alcançou o limite diário para adicionar beneficiários.",
                OWN_ACCOUNT_ERROR: "Transferência entre contas do mesmo titular não é permitida. Por favor, selecione um valor diferente.",
                PASSWORD_CHANGE_REQUIRED: "Seu banco solicitou alteração de senha. Por favor, acesse seu Internet Banking, altere sua senha, se desconecte do seu banco e tente novamente.",
                PASSWORD_OR_LOGIN_BLOCKED: "Usuário ou Senha de acesso bloqueados. Por favor, verifique com o seu banco.",
                PASSWORD_OR_LOGIN_INVALID: "Usuário ou Senha de acesso inválidos. Por favor, verifique com o seu banco.",
                PASSWORD_OR_LOGIN_INVALID_MANY_TIMES: "Excesso de tentativas com credenciais incorretas. Por favor, tente novamente em algumas horas.",
                PAYMENT_PENDING_APPROVAL_ERROR: "Sua transação não pôde ser processada. Você possui pelo menos um pagamento com aprovação pendente na sua conta bancária. Por favor, antes de processar um novo pagamento verifique os pendentes no seu banco e tente novamente.",
                PAYMENT_SAME_CREDENTIALS_ALREADY_IN_PROCESS: "Sua transação não pôde ser processada. Existe um outro pagamento sendo efetuado na sua conta bancária neste momento. Por favor, aguarde até que ele termine antes de iniciar um novo pagamento.",
                POTENTIALLY_DUPLICATED_PAYMENT: "Sua transação não pôde ser processada. Existe uma transação processada recentemente com valor semelhante. Por favor, verifique seu extrato bancário e se necessário entre em contato com o SAC.",
                SCHEDULE_PAYMENT_NOT_ALLOWED_ERROR: "Sua transação não pôde ser processada no momento. Por favor, tente novamente no horário comercial do banco.",
                SECURITY_1H_INTERVAL_ERROR: "Sua transação não pôde ser processada. Devido as configurações de segurança, seu banco solicitou um intervalo de 1h antes de tentar efetuar uma transação novamente. Por favor, aguarde e tente novamente.",
                SECURITY_IMAGE_NOT_SET_ERROR: "Por favor, faça login no seu Internet Banking, selecione uma imagem de segurança, se desconecte do seu banco e tente novamente.",
                SIMULTANEOUS_ACCESS_ERROR: "Acesso simultâneo identificado. Por favor, aguarde até que a transação seja concluída para acessar sua conta bancária via outros canais (Aplicativo, Internet Banking ou Caixa Eletrônico).",
                TEMPORARILY_UNAVAILABLE_ERROR: "Desculpe, o banco selecionado está temporariamente indisponível. Por favor, tente novamente em alguns minutos.",
                UNEXPECTED_ERROR: "Desculpe, ocorreu um erro inesperado. Por favor, tente novamente.",
                UNREAD_MESSAGES: "Mensagem não lida identificada. Por favor, acesse seu Internet banking, verique e marque as mensagens não lidas como lidas, se desconecte do seu banco e tente novamente.",
                VALIDATE_FORM_ERROR: "Desculpe, ocorreu um erro de validação inesperado. Por favor, tente novamente."
            },
            questions: {
                APP_LOGIN_REQUEST: "Seu login no site do banco começou. <b>Por favor, autorize o acesso usando o aplicativo do seu banco.</b>.",
                APP_APPROVAL_REQUEST: "Para realizar sua transação é necessário aprová-la no aplicativo do seu banco.</b>.",
                ACCOUNT_SELECTION: "Selecione a conta",
                CAPTCHA_REQUEST: "Por favor, digite o texto a seguir no campo abaixo",
                OTP_REQUEST: "Digite o código (recebido por SMS ou gerado por token/aplicativo de celular)"
            },
            placeholders: {
                ACCOUNT_SELECTION: "Conta '{{accountId}}' com saldo {{balance}}",
                AUTH_MODE_SELECTION: "Selecione o modo de autenticação",
                CAPTCHA_REQUEST: "Digite o texto",
                FILTER_AMOUNT: "Filtrar valores",
                OTP_REQUEST: "Digite o código com {{size}} dígitos"
            },
            validations: {
                feedback: {
                    exact_length: "Por favor, digite exatamente {{length}} caracteres.",
                    exact_length_digits: "Por favor, digite exatamente {{length}} dígitos.",
                    min_length: "Por favor, digite no mínimo {{length}} caracteres.",
                    min_length_digits: "Por favor, digite no mínimo {{length}} dígitos.",
                    norwegian_birth_number: "O número inserido não é um Registro de Nascimento Norueguês válido.",
                    only_digits: "Por favor, digite apenas números.",
                    TKCN_number: "O número inserido não é uma Identidade Turca válida."
                }
            },
            status: {
                verification: "Em verificação",
                canceled: "Cancelado",
                created: "Criado",
                expired: "Expirado",
                failure: "Erro",
                linked: "Associado",
                success: "Sucesso"
            }
        }
    },
    639: function(e) {
        e.exports = {
            banks: {
                auth: {
                    bank_id: "BankID with token",
                    login: "Kullanıcı Adı",
                    mobile: "Mobile phone number",
                    mobile_bank_id: "BankID Mobile",
                    password: "Şifre",
                    sms: "SMS"
                },
                AKBKTRIS: {
                    auth: {
                        login: "Müşteri / TC Kimlik Numarası",
                        password: "Akbank Direkt Şifresi"
                    }
                },
                DENITRIS: {
                    auth: {
                        login: "Kullanıcı Adı / TCKN",
                        password: "Parola"
                    }
                },
                DNBANOKK: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    },
                    questions: {
                        CHANGE_PAYMENT_SETTINGS: "Ödemeyi gerçekleştirmek için, 'Ödeme Ayarları' bölümünden 'Anında Ödeme' seçmeniz gerekir.<br/>Onaylıyor musunuz?"
                    }
                },
                FNNBTRIS: {
                    auth: {
                        login: "Müşteri / T.C. Kimlik Numaranız",
                        password: "FinansŞifreniz"
                    }
                },
                INGBTRIS: {
                    auth: {
                        login: "Kullanıcı Kodu / TCKN",
                        password: "Şifre"
                    }
                },
                ISBKTRIS: {
                    auth: {
                        login: "Müşteri Numaranız / TCKN / YKN",
                        password: "Şifre ya da Geçici Şifre"
                    }
                },
                KTEFTRIS: {
                    auth: {
                        login: "Müşteri No/TC Kimlik No",
                        password: "Şifre"
                    }
                },
                NDEANOKK: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    },
                    questions: {
                        CHANGE_PAYMENT_SETTINGS: "Ödemeyi gerçekleştirmek için, 'Ödeme Ayarları' bölümünden 'Anında Ödeme' seçmeniz gerekir.<br/>Onaylıyor musunuz?"
                    }
                },
                NORVNO21: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SBAKNOBB: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SGFSNO21: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SHEDNO22: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SNOWNO22: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SPRONO22: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                SPTRNO22: {
                    auth: {
                        login: "Birth number (with 11 digits)",
                        password: "Password"
                    }
                },
                TCZBTR2A: {
                    auth: {
                        login: "T.C. Kimlik / Müşteri Numaranız",
                        password: "Şifre"
                    }
                },
                TEBUTRIS: {
                    auth: {
                        login: "Kullanıcı Kodu/Adı/TC Kimlik No",
                        password: "Parola"
                    }
                },
                TGBATRIS: {
                    auth: {
                        login: "Müşteri/TC Kimlik Numarası",
                        password: "Parola"
                    },
                    questions: {
                        ADDITIONAL_CONFIRMATION_CODE_REQUEST: "Ek Onay Kodunu’ almak için lütfen '{{entryValue1}}' değer 1’e ve '{{entryValue2}}' değer 2’ye 'Cep Şifrematik' uygulamasından giriniz:"
                    }
                },
                TRHBTR2A: {
                    auth: {
                        login: "Müşteri/TC Kimlik Numarası",
                        password: "Parola"
                    }
                },
                TVBATR2A: {
                    auth: {
                        login: "Müşteri / T.C. Kimlik Numarası",
                        password: "İnternet Şifresi"
                    }
                },
                YAPITRIS: {
                    auth: {
                        login: "T.C. Kimlik No veya Kullanıcı Kodu",
                        password: "İnternet ve Mobil Şube Şifresi"
                    }
                }
            },
            button: {
                yes: "Evet",
                no: "Hayır",
                select: "Seç",
                select_amount: "Miktar Seç",
                back: "Geri",
                cancel: "İptal",
                login: "Giriş Yap",
                try_again: "Tekrar deneyiniz",
                verify: "Onaylayın"
            },
            language: {
                en: "English",
                no: "Norsk",
                pt: "Portuguese",
                tr: "Türkçe"
            },
            message: {
                transfer_canceled: "Transfer iptal edildi",
                amount_available: "şu anda mevcut olan miktar {{count}}",
                amounts_found: "{{count}} tutar(lar) bulundu",
                collection_incorrect_status: "Yanlış durumda transfer: {{status}}",
                communication_error: "İşleminiz işlenirken hata oluştu.",
                loading: "Yükleniyor ...",
                more_amounts: "+ {{count}} daha",
                no_amount_available: "Şu an kullanılabilir miktar yok",
                no_banks_available: "Toplama için uygun miktar yok. Lütfen daha sonra tekrar deneyiniz.",
                proceed_to_transfer: "Yatırıma devam et",
                process_duration_info: "Bu işleminiz tamamlanması 5 dakika kadar sürebilir.",
                process_error: "İşleminiz işlenirken bir hata oluştu. Şimdi tekrar deneyiniz veya birkaç dakika bekleyiniz.",
                process_success: "İşlem başarılı oldu!",
                processing: "İşleleniyor ...",
                remaining_time: "Kalan süre: {{minutes}}:{{seconds}}",
                select_amount: "Tutar seç",
                select_bank: "Banka seç",
                select_bank_name: "{{name}} seç",
                unknown_error: "Bilinmeyen hata"
            },
            reasons: {
                ACCOUNT_BALANCE_BLOCKED: "Hesabınızda bloke olduğu için işleminiz tamamlanamıyor. Lütfen bankanızla iletişime geçip, blokeyi kaldırdıktan sonra tekrar deneyin.",
                ACCOUNT_QUESTION_TIMEOUT_ERROR: "Kaynak hesabı gerekli süre içinde seçmediğinizden dolayı işleminiz gerçekleştirilemedi. Lütfen, işleminiz için bir kaynak hesap seçerek tekrar deneyin.",
                ACCOUNTS_DATA_INVALID: "Gönderim tutarı ve masraf tutarı, mevcut bakiyenizden daha fazla.",
                AMOUNT_OVER_TRANSACTION_LIMIT: "İşlem tutarı, işlem limitinizi aşıyor.",
                APPROVE_APP_DENIED_ERROR: "İşleminiz tamamlanamadı çünkü bankanızın mobil uygulaması üzerinden işlemi reddettiniz.",
                APPROVE_APP_TIMEOUT_ERROR: "Gerekli süre içinde işleminizi mobil bankacılık uygulaması üzerinden doğrulamadığınız için, işleminiz gerçekleştirilemedi.",
                APPROVE_OTP_TIMEOUT_ERROR: "OTP (SMS) doğrulama kodunu gerekli süre içinde girmediğinizden dolayı işleminize devam edilemedi.",
                CHANGE_SETTINGS_DENIED_ERROR: "Ödeme ayarları değişikliğini reddettiğiniz için işleminiz gerçekleştirilemedi.",
                CHANGE_SETTINGS_TIMEOUT_ERROR: "Ödeme ayarları değişikliğini size tanınan sürede onaylamadığınız için işleminiz gerçekleştirilemedi.",
                ERROR_DURING_APPROVING_PAYMENT: "Ödemeniz gerçekleştiriliyor. Tamamlanması 24 saat sürebilir.\nEğer banka hesap hareketlerinizde, ilgili tutarın çekildiğini görüyorsanız ama işlem hala tamamlanmadıysa, banka hesabı dökümünüzün bir kopyasını, detaylı inceleme için Müşteri Destek ekibimize gönderin.",
                ERROR_DURING_LOGIN: "Giriş başarısız oldu. Lütfen tekrar deneyin.",
                ERROR_DURING_PROCESSING_PAYMENT: "Ödemeyi doğrularken hata oluştu.",
                ERROR_PROCESSING_PAYMENT: "Ödemeyi doğrularken hata oluştu.",
                INSUFFICIENT_FUNDS: "Gönderim tutarı ve masraf tutarı, mevcut bakiyenizden daha fazla.",
                INVALID_CONF_TO_PAY_OVER_INTERNET_BANKING: "Uygun bir hesabınız bulunmadığı için işleminiz gerçekleştirilemedi. Lütfen internet bankacılığı sisteminize giriş yapın ve işleminizin para cinsinden bir hesabınız olup olmadığını ve işlem güvenlik ayarlarınızı control edin. Daha sonra çıkış yapıp, tekrar deneyin.",
                INVALID_RECEIVER_ACCOUNT: "Ödeme tamamlanamıyor. Lütfen işlemi tekrar başlatın.",
                LOGIN_APP_DENIED_ERROR: "İşleminiz tamamlanamadı çünkü bankanızın mobil uygulaması üzerinden işlemi reddettiniz.",
                LOGIN_APP_ERROR: "Gerekli süre içinde işleminizi mobil bankacılık uygulaması üzerinden doğrulamadığınız için, işleminiz gerçekleştirilemedi.",
                LOGIN_APP_TIMEOUT_ERROR: "Gerekli süre içinde işleminizi mobil bankacılık uygulaması üzerinden doğrulamadığınız için, işleminiz gerçekleştirilemedi.",
                NO_ACCOUNTS_DATA: "Gönderim tutarı ve masraf tutarı, mevcut bakiyenizden daha fazla.",
                ONLINE_ACCESS_ERROR: "Bankanızın internet şubesine giriş yaparak, işlemin tamamlanmasını engelleyen sorunu kontrol edin, sonra çıkış yaparak tekrar deneyin.",
                OTP_LIMIT_ERROR: "OTP SMS gönderme limitinizi aştınız. Birkaç dakika bekleyip, tekrar deneyin.",
                OTP_TIMEOUT_ERROR: "OTP (SMS) doğrulama kodunu gerekli süre içinde girmediğinizden dolayı işleminize devam edilemedi.",
                OTP_VALIDATION_ERROR: "OTP (SMS) doğrulama kodu bankanız tarafından reddedildiğinden dolayı işleminiz tamamlanamıyor.",
                OTP_WRONG_SIZE: "OTP (SMS) doğrulama kodu yanlış girildiğinden dolayı işleminiz tamamlanamıyor.",
                OWN_ACCOUNT_ERROR: "Kendi hesaplarınız arasında transfer yapamazsınız. Lütfen başka bir tutar seçiniz.",
                PASSWORD_CHANGE_REQUIRED: "Bankanızın internet şubesine giriş yapın, giriş şifrenizi değiştirin, çıkış yaptıktan sonra tekrar deneyin.",
                PASSWORD_OR_LOGIN_BLOCKED: "Kullanıcı adı veya şifre doğru değil. Bankanızın internet şubesine giriş yapabildiğinizden emin olun.",
                PASSWORD_OR_LOGIN_INVALID: "Internet bankacılığı giriş bilgileriniz hatalı. Lütfen kontrol edip tekrar deneyin.",
                PASSWORD_OR_LOGIN_INVALID_MANY_TIMES: "Yanlış giriş bilgileriyle, çok fazla giriş yapılmaya çalışılıyor. Bankanızın internet şubesine giriş yaptıktan sonra, çıkış yaparak tekrar deneyin.",
                PAYMENT_PENDING_APPROVAL_ERROR: "Onay bekleyen en az bir ödemeniz olduğu için işleminiz gerçekleştirilemiyor. Lütfen bankanızın internet şubesine giriş yaparak, bekleyen ödemelerinizi onaylayın veya iptal edin, daha sonra çıkış yaparak tekrar deneyin.",
                PAYMENT_SAME_CREDENTIALS_ALREADY_IN_PROCESS: "Aynı giriş bilgileriyle başlatmış olduğunuz başka bir ödeme var. Lütfen, yenisini başlatmadan önce mevcut ödemenin tamamlanmasını bekleyin.",
                PAYMENT_SUSPENDED_DUE_TO_TECHNICAL_REASONS: "İşleminiz teknik bir sorun nedeniyle gerçekleştirilemedi.\n{{time}} zamanına kadar ödemeleriniz işleme alınamayacaktır.\nLütfen {{time}} zamanından sonra tekrar deneyin.",
                SCHEDULE_PAYMENT_NOT_ALLOWED_ERROR: "İşleminiz şu anda gerçekleştirilemiyor, lütfen bankanızın çalışma saatleri içinde tekrar deneyin.",
                SECURITY_1H_INTERVAL_ERROR: "Güvenlik ayarlarından dolayı bankanız, işlemin tekrarlanması için 1 saat geçmesini talep etmektedir. Lütfen 1 saat sonra tekrar deneyin.",
                SECURITY_IMAGE_NOT_SET_ERROR: "Bankanızın internet şubesine giriş yapın, bir güvenlik resmi seçin, çıkış yaptıktan sonra tekrar deneyin.",
                SIMULTANEOUS_ACCESS_ERROR: "İşlem süreci tamamlanana kadar, bankanızın internet şubesine mobil cihazınız veya bilgisayar üzerinden giriş yapmayın.",
                TEMPORARILY_UNAVAILABLE_ERROR: "Seçtiğiniz bankaya şu anda geçici olarak erişilemiyor. Lütfen bir süre sonra tekrar deneyin.",
                UNEXPECTED_ERROR: "Beklenmeyen bir hata oluştu. Lütfen tekrar deneyin.",
                UNREAD_MESSAGES: "Bankanızın internet şubesine giriş yapıp, bekleyen mesajlarınızı okunmuş duruma getirip, çıkış yaptıktan sonra, tekrar deneyin.",
                VALIDATE_FORM_ERROR: "Beklenmeyen bir doğrulama hatası oluştu. Lütfen tekrar deneyin."
            },
            questions: {
                APP_LOGIN_REQUEST: "Online banka sisteminize giriş işleminiz başlatıldı. <b>Lütfen mobil uygulama üzerinden erişime izin verin</b>.",
                APP_APPROVAL_REQUEST: "İşleminizi yapabilmek için <b>mobil uygulama ile onay vermeniz gerekmektedir</b>.",
                ACCOUNT_SELECTION: "Hesap seç",
                CAPTCHA_REQUEST: "Lütfen aşağıdaki kutudaki kodu eksiksiz olarak girin",
                OTP_REQUEST: "Kodu giriniz (SMS ile gönderilen veya şifrematik / mobil uygulama tarafından oluşturulan)"
            },
            placeholders: {
                ACCOUNT_SELECTION: "Hesap '{{accountId}}' denge ile {{balance}}",
                AUTH_MODE_SELECTION: "Select authentication mode",
                CAPTCHA_REQUEST: "Kodu girin",
                FILTER_AMOUNT: "Tutarı filtrele",
                OTP_REQUEST: "{{size}} haneli kodu giriniz"
            },
            validations: {
                feedback: {
                    exact_length: "Tam olarak {{length}} karakter girin",
                    exact_length_digits: "Tam olarak {{length}} rakam girin",
                    min_length: "En az {{length}} karakter girin",
                    min_length_digits: "En az {{length}} rakam girin",
                    only_digits: "Sadece rakam girin",
                    TKCN_number: "Girilen değer geçerli bir TCKN değil"
                }
            },
            status: {
                verification: "Doğrulama",
                canceled: "İptal edildi",
                created: "Oluşturuldu",
                expired: "Süresi gecti",
                failure: "Başarısız",
                linked: "Bağlantılı",
                success: "Başarılı"
            }
        }
    },
    640: function(e, t, n) {}
});
//# sourceMappingURL=bundle-d76d976fb9921824bfe0.js.map