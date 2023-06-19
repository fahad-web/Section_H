"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.AdminModifyDto = exports.AdminLogin = exports.AdminDtoReg = void 0;
const class_validator_1 = require("class-validator");
class AdminDtoReg {
}
exports.AdminDtoReg = AdminDtoReg;
__decorate([
    (0, class_validator_1.IsString)(),
    (0, class_validator_1.Matches)(/^[a-zA-Z]+$/, { message: "Enter a Valid Name" }),
    (0, class_validator_1.IsNotEmpty)({ message: "Please Enter Name" }),
    __metadata("design:type", String)
], AdminDtoReg.prototype, "Name", void 0);
__decorate([
    (0, class_validator_1.IsEmail)(),
    (0, class_validator_1.IsNotEmpty)({ message: "Please Enter Email" }),
    __metadata("design:type", String)
], AdminDtoReg.prototype, "Email", void 0);
__decorate([
    (0, class_validator_1.IsNumber)(),
    (0, class_validator_1.IsNotEmpty)({ message: "Please Enter Number" }),
    __metadata("design:type", Number)
], AdminDtoReg.prototype, "Number", void 0);
__decorate([
    (0, class_validator_1.IsString)(),
    (0, class_validator_1.Matches)(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).{6,64}$/gm, {
        message: 'Password must be between 6 and 64 characters long with 1 special character and capital character each',
    }),
    (0, class_validator_1.IsNotEmpty)({ message: "Please Enter Password" }),
    __metadata("design:type", String)
], AdminDtoReg.prototype, "Password", void 0);
class AdminLogin {
}
exports.AdminLogin = AdminLogin;
__decorate([
    (0, class_validator_1.IsString)(),
    (0, class_validator_1.Matches)(/^[a-zA-Z0-9@._]+$/, { message: "Can not use Space" }),
    (0, class_validator_1.IsNotEmpty)({ message: "User name can not Empty" }),
    __metadata("design:type", String)
], AdminLogin.prototype, "Useranme", void 0);
__decorate([
    (0, class_validator_1.IsStrongPassword)(),
    (0, class_validator_1.IsNotEmpty)({ message: "Password can not Empty" }),
    __metadata("design:type", String)
], AdminLogin.prototype, "Password", void 0);
class AdminModifyDto {
}
exports.AdminModifyDto = AdminModifyDto;
__decorate([
    (0, class_validator_1.IsString)(),
    (0, class_validator_1.Matches)(/^[a-zA-Z]+$/, { message: "Enter a Valid Name" }),
    (0, class_validator_1.IsNotEmpty)({ message: "Please Enter Name" }),
    __metadata("design:type", String)
], AdminModifyDto.prototype, "Name", void 0);
__decorate([
    (0, class_validator_1.IsEmail)(),
    (0, class_validator_1.IsNotEmpty)({ message: "Please Enter Email" }),
    __metadata("design:type", String)
], AdminModifyDto.prototype, "Email", void 0);
__decorate([
    (0, class_validator_1.IsNumber)(),
    (0, class_validator_1.IsNotEmpty)({ message: "Please Enter Number" }),
    __metadata("design:type", Number)
], AdminModifyDto.prototype, "Number", void 0);
__decorate([
    (0, class_validator_1.IsString)(),
    (0, class_validator_1.Matches)(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).{6,64}$/gm, {
        message: 'Password must be between 6 and 64 characters long with 1 special character and capital character each',
    }),
    (0, class_validator_1.IsNotEmpty)({ message: "Please Enter Password" }),
    __metadata("design:type", String)
], AdminModifyDto.prototype, "Password", void 0);
//# sourceMappingURL=admin.dto.js.map